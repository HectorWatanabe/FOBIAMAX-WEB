<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'Administrador') {
            return redirect()->route('psychologists'); 
        }

        return redirect()->route('patients'); 

    }

    public function perfil(){
        $user = Auth::user();
        return view('perfil', compact('user'));
    }
}
