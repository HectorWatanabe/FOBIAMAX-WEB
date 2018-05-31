<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Psychologist;
use App\User;

class PsychologistController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('check.admin');
    }
    
    public function index(){
    	$psychologists = Psychologist::all();
    	return view('psychologists.index', compact('psychologists'));
    }

    public function show($id){
        $psychologist = Psychologist::find($id);
        return view('psychologists.show', compact('psychologist'));
    }

    public function create(){
        $psychologist = new Psychologist;
        return view('psychologists.create', compact('psychologist'));
    }

    public function store(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->mother_last_name = $request->mother_last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = "Psychologist";
        $user->state = 0;
        $user->save();

        $psychologist = new Psychologist;
        $psychologist->user_id = $user->id;
        $psychologist->specialty = $request->specialty;
        $psychologist->code = $request->code;
        $psychologist->description = $request->description;

        $psychologist->save();

        return redirect()->route('psychologists');
    }

    public function edit($id){
    	$psychologist = Psychologist::find($id);
    	return view('psychologists.edit', compact('psychologist'));
    }

    public function update(Request $request, $id){
    	$psychologist = Psychologist::find($id);
    	$psychologist->description = $request->description;
    	$psychologist->save();

    	$user = User::find($psychologist->user_id);
    	$user->name = $request->name;
    	$user->last_name = $request->last_name;
    	$user->mother_last_name = $request->mother_last_name;
    	$user->email = $request->email;
    	$user->password = \Hash::make($request->password);
    	$user->save();

    	return redirect()->route('psychologists');
    }

    public function change($id){
        $psychologist = Psychologist::find($id);
        $user = User::find($psychologist->user_id);
        if($user->state != 0){
            $user->state = 0;    
        }else{
            $user->state = 1;    
        }
        $user->save();
        return redirect()->route('psychologists');
    }
}
