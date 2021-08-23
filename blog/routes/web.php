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


Route::get('register', 'Auth\RegisterController@register');
Route::post('register', 'Auth\RegisterController@store')->name('register');


Route::get('login', 'Auth\LoginController@login');
Route::post('login', 'Auth\LoginController@store')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('home', 'Auth\LoginController@home')->name('home');

// Route::get('login', 'AuthController@index');
// Route::post('post-login', 'AuthController@postLogin');
// Route::get('register', 'AuthController@register');
// Route::post('post-register', 'AuthController@postRegister');
// Route::get('dashboard', 'AuthController@dashboard');
// Route::get('logout', 'AuthController@logout');

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

// Route::get('settings/change-password', 'Auth\ResetPasswordController@change_password')->name('change_password');
// Route::post('settings/update-password', 'Auth\ResetPasswordController@update_password')->name('update_password');
Route::get('settings/reset-password', 'Auth\ResetPasswordController@getPassword')->name('change_password');
Route::post('settings/reset-password', 'Auth\ResetPasswordController@updatePassword')->name('update_password');

Route::get('accredited', 'AccreditedController@index')->name('users.update.status');
Route::get('accredited/{accredited}/status', 'AccreditedController@status')->name('accredited.status');
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

Route::get('employee', 'EmployeeController@index');
Route::get('employee/create', 'EmployeeController@create');
Route::post('employee/create', 'EmployeeController@store')->name('novo_funcionario');
Route::get('employee/{id}', 'EmployeeController@show');
Route::get('employee/edit/{id}', 'EmployeeController@edit');
Route::post('employee/edit/{id}', 'EmployeeController@update');
Route::delete('employee/{id}', 'EmployeeController@destroy');

Route::get('animals', 'AnimalsController@index');
Route::get('animals/create', 'AnimalsController@create');
Route::post('animals/create', 'AnimalsController@store')->name('novo_animal');
Route::get('animals/{id}', 'AnimalsController@show');
Route::get('animals/edit/{id}', 'AnimalsController@edit');
Route::post('animals/edit/{id}', 'AnimalsController@update');