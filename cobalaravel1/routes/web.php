<?php

use Illuminate\Support\Facades\Route;

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
Route::get('index', function () {
    return view('index');
});
Route::get('login', function () {
    return view('login');
});

/*Route::get('/foo', function()) {
	return 'Hello World';
}

Route::get('/myroute/{name}/{age}', function($name, $age){
	return 'Hello my name is '.$name.' and my age is '.$age.' years old.';
});*/