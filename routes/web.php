<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlador;
use App\Http\Controllers\parteuno;

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
Route::get('/',[controlador::class,'Class']);
Route::get('/plantilla',[parteuno::class,'pepito']);

/* Envio de parametros */
Route::get('/panqueque/{base?}/{altura?}/{rad?}/{basar?}',[controlador::class,'Queso']);
Route::get('/a',[controlador::class,'Patata']);
Route::get('/p/{multi}/{salario}/{a1}/{a2}/{a3}/{a4}/{a5}',[controlador::class,'electric']);

/* Problemas en php */
Route::get('/Work',[controlador::class,'bread']);
Route::get('/Work2',[parteuno::class,'bread']);
Route::get('/Work3',[parteuno::class,'bread2']);

/* Problemas en blade php */
Route::get('/todo',[parteuno::class,'pipis']);

Route::get('/tomato',[parteuno::class,'tomao'])
->name('a');
Route::post('/tomatos',[parteuno::class,'tomato'])
->name('b');