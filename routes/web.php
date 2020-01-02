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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('/Company','CompaniesController@store');
Route::get('/Company/{id}/edit', 'CompaniesController@edit') ;
Route::get('/Company', 'CompaniesController@index');  
Route::get('/Company/create','CompaniesController@create');
Route::put('/Company/{id}', 'CompaniesController@update') ;
Route::get('/Company/{id}', 'CompaniesController@show') ;
Route::delete('/delete/Company/{id}','CompaniesController@destroy');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Supplier/{id}', 'SuppliersController@show') ;
Route::get('/Supplier', 'SuppliersController@index');  