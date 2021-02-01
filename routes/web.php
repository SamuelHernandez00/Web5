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

Route::name('inicio')->get('/', function () {
    return view('welcome');
}); // Ruta con funcion y retorno a una ruta

Route::name('basico')->get('basico/',function () {
  return view('basico'); });


Route::name('campos')->get('campos/',function () {
    return view('campos'); });

Route::name('validar')->get('validar/',function () {
      return view('validar'); });

Route::name('valor')->get('valor/',function () {
      return view('valor'); });