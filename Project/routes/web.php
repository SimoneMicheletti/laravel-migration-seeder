<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', 'EmployeeController@index') -> name('employee-index');
Route::get('/employee/{id}', 'EmployeeController@show') -> name('employee-show');

Route::get('/brands', 'BrandController@index') -> name('brand-index');
Route::get('/brand/{id}', 'BrandController@show') -> name('brand-show');

Route::get('/offices', 'OfficeController@index') -> name('office-index');
Route::get('/office/{id}', 'OfficeController@show') -> name('office-show');