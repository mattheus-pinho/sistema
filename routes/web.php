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

Route::get('teste', function () {
    return view('teste');
});


//Rotas de View

Route::get('/', function () {
    return view('login');
});


Route::get('admin', function () {
    return view('admin.admin');
});


//Rotas de cadastro


//Rotas de consulta


//Rotas de edição 


//Rotas de exclusão