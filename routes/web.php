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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('all-contacts', 'AboutController@allcontact')->name('all.contacts');
Route::get('/insert-data', 'AboutController@insert');
Route::post('/data-added', 'AboutController@dataadded');
Route::get('/delete-contact/{id}', 'AboutController@delete');
Route::get('/edit-contact/{id}', 'AboutController@edit');
Route::post('/update-contact/{id}', 'AboutController@update');
Route::get('/view-contact/{id}', 'AboutController@view');