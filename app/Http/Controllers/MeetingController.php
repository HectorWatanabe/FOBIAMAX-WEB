<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Meeting;
use App\Psychologist;

class MeetingController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('check.psy');
    }

    public function index(){
    	$meetings = Meeting::all();
    	return view('meetings.index', compact('meetings'));
    }

    public function show($id){
        $meeting = Meeting::find($id);
        return view('meetings.show', compact('meeting'));
    }

    public function create(){
        $patients = DB::select('select id, name, last_name, mother_last_name from patients');

        foreach ($patients as $patient) {
            $new_patients[$patient->id] = $patient->id.' - '.$patient->name.' '.$patient->last_name.' '.$patient->mother_last_name;
        }
        
        $meeting = new Meeting;
        return view('meetings.create', compact('meeting','new_patients'));
    }

    public function store(Request $request){

        $request->validate([
            'date' => 'required',
            'hour' => 'required',
            'clinical_criteria' => 'required',
            'usas' => 'required',
            'diagnosis' => 'required',
            'sweating_measure' => 'required',
            'pulse' => 'required',
            'task' => 'required',
            'description' => 'required',
        ]);

        $meeting = new Meeting;
        $my_psychologist = Psychologist::where( 'user_id', Auth::user()->id )->first();
        $meeting->psychologist_id = $my_psychologist->id;
        $meeting->patient_id = $request->patient_id;
        $meeting->date = $request->date;
        $meeting->hour = $request->hour;
        $meeting->clinical_criteria = $request->clinical_criteria;
        $meeting->usas = $request->usas;
        $meeting->diagnosis = $request->diagnosis;
        $meeting->sweating_measure = $request->sweating_measure;
        $meeting->pulse = $request->pulse;
        $meeting->task = $request->task;
        $meeting->description = $request->description;
        $meeting->save();

        \Session::flash('success', 'Se registró la información de la cita');

        return redirect()->route('meetings');
    }

    public function edit($id){
    	$meeting = Meeting::find($id);
    	return view('meetings.edit', compact('meeting'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'date' => 'required',
            'hour' => 'required',
            'clinical_criteria' => 'required',
            'usas' => 'required',
            'diagnosis' => 'required',
            'sweating_measure' => 'required',
            'pulse' => 'required',
            'task' => 'required',
            'description' => 'required',
        ]);

    	$meeting = Meeting::find($id);
    	$meeting->date = $request->date;
        $meeting->hour = $request->hour;
        $meeting->clinical_criteria = $request->clinical_criteria;
        $meeting->usas = $request->usas;
        $meeting->diagnosis = $request->diagnosis;
        $meeting->sweating_measure = $request->sweating_measure;
        $meeting->pulse = $request->pulse;
        $meeting->task = $request->task;
        $meeting->description = $request->description;
    	$meeting->save();

        \Session::flash('success', 'Se actualizó la información de la cita');

    	return redirect()->route('meetings');
    }

    public function destroy($id){
    	$meeting = Meeting::find($id);
    	$meeting->delete();

        \Session::flash('success', 'Se eliminó la cita');

    	return redirect()->route('meetings');	
    }
}
