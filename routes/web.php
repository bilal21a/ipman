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


Route::match(['get', 'post'], '/', 'HomeController@index')->name('address');
Route::get('/getdata', 'HomeController@getdata')->name('getdata');
Route::delete('address/bulk/delete', 'HomeController@ip_bulk_delete')->name('ip_bulk_delete');
Route::get('address/delete/{id}', 'HomeController@delete_address')->name('delete_address');
Route::post('address/save', 'HomeController@address_save')->name('address_save');
Route::post('address/update', 'HomeController@address_update')->name('address_update');

Route::get('address/edit/{id}', 'HomeController@edit_address')->name('edit_address');
Route::get('address/ping/{id}/{type}', 'HomeController@ping_address')->name('ping_address');
Route::get('address/export/{start?}/{end?}', 'HomeController@export_address')->name('export_address');

