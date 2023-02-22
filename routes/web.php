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

Route::get('/login', function () {
    return view('login');
});


//Rotas de View

Route::get('/', function () {
    return view('home');
});


Route::get('teste', function () {
    return view('teste');
});


//Rotas de cadastro


//Rotas de consulta


//Rotas de edição 


//Rotas de exclusão