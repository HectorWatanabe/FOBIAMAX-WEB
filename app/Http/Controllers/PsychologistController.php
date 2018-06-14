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
        
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'mother_last_name' => 'required',
            'email' => 'required|unique:users,email',
            'specialty' => 'required',
            'description' => 'required',
            'password' => 'required|min:6',
        ]);

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
        $psychologist->code = 'FP'.$user->id;
        $psychologist->description = $request->description;

        $psychologist->save();

        \Session::flash('success', 'Se registró la información del psicólogo');

        return redirect()->route('psychologists');
    }

    public function edit($id){
    	$psychologist = Psychologist::find($id);
    	return view('psychologists.edit', compact('psychologist'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'mother_last_name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'password' => 'min:6',
        ]);

    	$psychologist = Psychologist::find($id);
    	$psychologist->description = $request->description;
    	$psychologist->save();

    	$user = User::find($psychologist->user_id);
    	$user->name = $request->name;
    	$user->last_name = $request->last_name;
    	$user->mother_last_name = $request->mother_last_name;
    	$user->email = $request->email;

        if($request->activa != null){
            $user->password = \Hash::make($request->password);    
        }
    	
    	$user->save();

        \Session::flash('success', 'Se actualizó la información del psicólogo');

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

        \Session::flash('success', 'Se cambio el estado de acceso del psicólogo a la plataforma');

        return redirect()->route('psychologists');
    }
}
