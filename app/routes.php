<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','HomeController@index');

Route::get('users', function()
{
    return View::make('users');
});

// UserController
Route::get('user/{id}', 'UserController@showProfile');
Route::get('user', 'UserController@showProfile');

// ProblemController
Route::resource('problem', 'ProblemController');

// ProposalController
Route::resource('proposals', 'ProposalController');

// AdminHomeController
Route::resource('admin', 'AdmHomeController');

// AdminProblemController
Route::resource('adminProblem', 'AdmProblemController');
Route::get('adminProblem/create','AdmProblemController@create');
Route::post('adminProblem/add','AdmProblemController@add');
Route::get('adminProblem/update/{id}','AdmProblemController@update');
Route::post('adminProblem/edit/{id}','AdmProblemController@edit');
Route::get('adminProblem/delete/{id}','AdmProblemController@delete');

// AdminUserController
Route::post('adminUser/add','AdmUserController@add');
Route::post('adminUser/delete/{id}','AdmUserController@delete');
Route::get('adminUser','AdmUserController@index');
Route::get('adminUser/getAll','AdmUserController@getAll');
Route::post('adminUser/emailexists','AdmUserController@emailexists');
Route::post('adminUser/loginexists','AdmUserController@loginexists');
