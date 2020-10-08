<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'TelevisionController@index') -> name('televisions.index');
// Route::get('/television/show/{id}', 'GuestController@show') -> name('television.show');
//
Route::get('/television/create', 'TelevisionController@create') -> name('television.create');
Route::post('/television/create', 'TelevisionController@store') -> name('television.store');
//
// Route::get('/television/edit/{id}', 'LoggedController@edit') -> name('television.edit');
// Route::post('/television/update/{id}', 'LoggedController@update') -> name('television.update');
//
// Route::get('/television/delete/{id}', 'LoggedController@destroy') -> name('television.delete');

Route::get('/api/televisions/all', 'TelevisionApiController@getAllTelevision') -> name('television.api');
Route::get('/api/televisions/price_best', 'TelevisionApiController@getBestTelevision') -> name('television.best');
