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

Route::get('/', function () {
    return view('index');
});

/*
--------------------------------------------------------------------------
Products Routes
--------------------------------------------------------------------------
*/
Route::get('/products', 'ProductsController@index');
Route::post('/products', 'ProductsController@store');
Route::get('/products/new', 'ProductsController@create');
Route::get('/products/delete/{id}', 'ProductsController@destroy');
Route::get('/products/edit/{id}', 'ProductsController@edit');
Route::post('/products/{id}', 'ProductsController@update');

/*
--------------------------------------------------------------------------
Departments Routes
--------------------------------------------------------------------------
*/
Route::get('/departments', 'DepartmentController@index');
Route::post('/departments', 'DepartmentController@store');
Route::get('/departments/new', 'DepartmentController@create');
Route::get('/departments/delete/{id}', 'DepartmentController@destroy');
Route::get('/departments/edit/{id}', 'DepartmentController@edit');
Route::post('/departments/{id}', 'DepartmentController@update');

/*
--------------------------------------------------------------------------
Clients Routes
--------------------------------------------------------------------------
*/
Route::get('/clients', 'ClientsController@index');
Route::get('/clients/new', 'ClientsController@create');
Route::post('/clients', 'ClientsController@store');