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

Route::get('/','Auth\LoginController@showLoginForm');//diluar folder controller
Auth::routes();
Route::get('home', 'HomeController@index')->name('home');
Route::get('transaction', 'TransactionController@index')->name('transaction.index');
Route::get('transaction/create', 'TransactionController@create')->name('transaction.create');
Route::post('transaction/create', 'TransactionController@store')->name('transaction.store');
Route::get('transaction/edit/{id}', 'TransactionController@edit');
Route::post('transaction/edit/{id}', 'TransactionController@update');
Route::get('transaction/import', 'TransactionController@import');
Route::post('transaction/import', 'TransactionController@doImport');
Route::get('transaction/export', 'TransactionController@export');
Route::get('transaction/delete/{id}', 'TransactionController@delete');

Route::post('stuff/stuffs.json', 'TransactionController@getCategory');

Route::get('rule', 'RuleController@index');
Route::post('rule/proses', 'RuleController@proses');
Route::get('frequent', 'FrequentController@index');

Route::get('about', 'AboutController@index');
Route::get('contact', 'AboutController@contact');


Route::get('simulasi', 'SimulasiController@index');
Route::post('simulasi/proses', 'SimulasiController@proses');

Route::get('toko', 'TokoController@index');
Route::get('toko/create', 'TokoController@create');
Route::post('toko/create', 'TokoController@store');
Route::get('toko/edit/{id}', 'TokoController@edit');
Route::post('toko/edit/{id}', 'TokoController@update');
Route::get('toko/delete/{id}', 'TokoController@delete');

Route::get('stuff', 'StuffController@index')->name('stuff.index');
Route::get('stuff/create', 'StuffController@create')->name('stuff.create');
Route::post('stuff/create', 'StuffController@store')->name('stuff.store');
Route::get('stuff/edit/{id}', 'StuffController@edit')->name('stuff.edit');
Route::post('stuff/edit/{id}', 'StuffController@update')->name('stuff.update');
Route::get('stuff/destroy/{id}', 'StuffController@destroy')->name('stuff.delete');

Route::get('report', 'ReportController@index')->name('report.index');
Route::get('report/download','ReportController@export')->name('report.export');
Route::get('/ajax-subcat/stuffs','TransactionController@getStuff') ;