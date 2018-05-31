<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return redirect()->route('login');
});

//Login Controller

Route::get('/login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::post('/login', [
    'as' => 'login-post',
    'uses' => 'Auth\LoginController@login'
]);

Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

//Home Controller

Route::get('/home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/perfil', [
    'as' => 'perfil',
    'uses' => 'HomeController@perfil'
]);

// Psychologist Controller

Route::get('/psicólogos', [
    'as' => 'psychologists',
    'uses' => 'PsychologistController@index'
]);

Route::get('/psicólogos/{id}/edit', [
    'as' => 'psychologist-edit',
    'uses' => 'PsychologistController@edit'
]);

Route::get('/psicólogos/create', [
    'as' => 'psychologist-create',
    'uses' => 'PsychologistController@create'
]);

Route::post('/psicólogos', [
    'as' => 'psychologist-store',
    'uses' => 'PsychologistController@store'
]);

Route::patch('/psicólogos/{id}', [
    'as' => 'psychologist-update',
    'uses' => 'PsychologistController@update'
]);

Route::post('/psicólogos/{id}/change', [
    'as' => 'psychologist-change',
    'uses' => 'PsychologistController@change'
]);

Route::get('/psicólogos/{id}', [
    'as' => 'psychologist-show',
    'uses' => 'PsychologistController@show'
]);

//Patient Controller

Route::get('/pacientes', [
    'as' => 'patients',
    'uses' => 'PatientController@index'
]);

Route::get('/pacientes/{id}/edit', [
    'as' => 'patient-edit',
    'uses' => 'PatientController@edit'
]);

Route::get('/pacientes/create', [
    'as' => 'patient-create',
    'uses' => 'PatientController@create'
]);

Route::post('/pacientes', [
    'as' => 'patient-store',
    'uses' => 'PatientController@store'
]);

Route::patch('/pacientes/{id}', [
    'as' => 'patient-update',
    'uses' => 'PatientController@update'
]);

Route::get('/pacientes/{id}', [
    'as' => 'patient-show',
    'uses' => 'PatientController@show'
]);

// Meeting Controller

Route::get('/citas', [
    'as' => 'meetings',
    'uses' => 'MeetingController@index'
]);

Route::get('/citas/{id}/edit', [
    'as' => 'meeting-edit',
    'uses' => 'MeetingController@edit'
]);

Route::get('/citas/create', [
    'as' => 'meeting-create',
    'uses' => 'MeetingController@create'
]);

Route::post('/citas', [
    'as' => 'meeting-store',
    'uses' => 'MeetingController@store'
]);

Route::patch('/citas/{id}', [
    'as' => 'meeting-update',
    'uses' => 'MeetingController@update'
]);

Route::get('/citas/{id}', [
    'as' => 'meeting-show',
    'uses' => 'MeetingController@show'
]);

Route::delete('/citas/{id}', [
    'as' => 'meeting-destroy',
    'uses' => 'MeetingController@destroy'
]);

// Recuperar Contraseña

Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('/password/reset', 'Auth\ResetPasswordController@reset');