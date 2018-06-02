<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('check.psy');
    }
    
    public function index(){
    	$patients = Patient::all();
    	return view('patients.index', compact('patients'));
    }

    public function show($id){
        $patient = Patient::find($id);
        return view('patients.show', compact('patient'));
    }

    public function create(){
        $patient = new Patient;
        return view('patients.create', compact('patient'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'mother_last_name' => 'required',
            'n_document' => 'required|unique:patients,n_document',
            'address' => 'required',
        ]);

        $patient = new Patient;
        $patient->name = $request->name;
        $patient->last_name = $request->last_name;
        $patient->mother_last_name = $request->mother_last_name;
        $patient->document = $request->document;
        $patient->n_document = $request->n_document;
        $patient->civil_status = $request->civil_status;
        $patient->gender = $request->gender;
        $patient->address = $request->address;
        $patient->degree_of_instruction = $request->degree_of_instruction;
        $patient->save();

        return redirect()->route('patients');
    }

    public function edit($id){
    	$patient = Patient::find($id);
    	return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'mother_last_name' => 'required',
            'n_document' => 'required',
            'address' => 'required',
        ]);

    	$patient = Patient::find($id);
    	$patient->name = $request->name;
        $patient->last_name = $request->last_name;
        $patient->mother_last_name = $request->mother_last_name;
        $patient->document = $request->document;
        $patient->n_document = $request->n_document;
        $patient->civil_status = $request->civil_status;
        $patient->gender = $request->gender;
        $patient->address = $request->address;
        $patient->degree_of_instruction = $request->degree_of_instruction;
    	$patient->save();

    	return redirect()->route('patients');
    }

}
