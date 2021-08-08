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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('register', 'AuthController@register');
Route::post('post-register', 'AuthController@postRegister'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');

Route::get('home', 'HomeController@index');

Route::get('species', 'SpeciesController@index');
Route::get('species/create', 'SpeciesController@create');
Route::post('species/create', 'SpeciesController@store')->name('nova_especie');
Route::get('species/{id}', 'SpeciesController@show');
Route::get('species/edit/{id}', 'SpeciesController@edit');
Route::post('species/edit/{id}', 'SpeciesController@update');
Route::delete('species/{id}', 'SpeciesController@destroy');

Route::get('settings/change-password', 'AuthController@change_password')->name('change_password');
Route::post('settings/update-password', 'AuthController@update_password')->name('update_password');


