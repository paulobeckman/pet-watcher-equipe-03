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
    return view('login');
});

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('register', 'AuthController@register');
Route::post('post-register', 'AuthController@postRegister');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');

Route::get('home', 'HomeController@index');

Route::get('owners', 'OwnersController@index');
Route::get('owners/create', 'OwnersController@create');
Route::post('owners/create', 'OwnersController@store')->name('novo_proprietario');
Route::get('owners/{id}', 'OwnersController@show');
Route::get('owners/edit/{id}', 'OwnersController@edit');
Route::post('owners/edit/{id}', 'OwnersController@update');
Route::delete('owners/{id}', 'OwnersController@destroy');

Route::get('species', 'SpeciesController@index');
Route::get('species/create', 'SpeciesController@create');
Route::post('species/create', 'SpeciesController@store')->name('nova_especie');
Route::get('species/{id}', 'SpeciesController@show');
Route::get('species/edit/{id}', 'SpeciesController@edit');
Route::post('species/edit/{id}', 'SpeciesController@update');
Route::delete('species/{id}', 'SpeciesController@destroy');

Route::get('settings/change-password', 'AuthController@change_password')->name('change_password');
Route::post('settings/update-password', 'AuthController@update_password')->name('update_password');

Route::get('accredited', 'AccreditedController@index');
Route::get('accredited/create', 'AccreditedController@create');
Route::post('accredited/create', 'AccreditedController@store')->name('nova_credencial');
Route::get('accredited/{id}', 'AccreditedController@show');
Route::get('accredited/edit/{id}', 'AccreditedController@edit');
Route::post('accredited/edit/{id}', 'AccreditedController@update');
Route::delete('accredited/{id}', 'AccreditedController@destroy');

Route::get('license', 'LicenseController@index');
Route::get('license/create', 'LicenseController@create');
Route::post('license/create', 'LicenseController@store')->name('nova_licenca');
Route::get('license/{id}', 'LicenseController@show');
Route::get('license/edit/{id}', 'LicenseController@edit');
Route::post('license/edit/{id}', 'LicenseController@update');
Route::delete('license/{id}', 'LicenseController@destroy');


