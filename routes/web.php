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
    return view('welcome');
});

Route::get('/getdata', 'HomeController@getdata')->name('getdata');
Route::delete('address/bulk/delete', 'HomeController@ip_bulk_delete')->name('ip_bulk_delete');
Route::get('address/delete/{id}', 'HomeController@delete_address')->name('delete_address');

