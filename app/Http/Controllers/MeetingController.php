<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $meeting = new Meeting;
        return view('meetings.create', compact('meeting'));
    }

    public function store(Request $request){
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

        return redirect()->route('meetings');
    }

    public function edit($id){
    	$meeting = Meeting::find($id);
    	return view('meetings.edit', compact('meeting'));
    }

    public function update(Request $request, $id){
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

    	return redirect()->route('meetings');
    }

    public function delete($id){
    	$meeting = Meeting::find($id);
    	$meeting->delete();
    	return redirect()->route('meetings');	
    }
}
