<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Default route
/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

// My routes. Here is where we call/connect to the database tables

Route::get('/contacts','ContactsController@index');
Route::post('/contact/create','ContactsController@create');
Route::get('/contact/{id}/edit','ContactsController@edit');
Route::put('/contact/{id}/update','ContactsController@update');
Route::delete('/contact/{id}/delete','ContactsController@delete');

Route::get('/workers','WorkerController@index');
Route::post('/workers','WorkerController@index');
Route::get('/workers','WorkerController@index');
Route::put('/workers','WorkerController@index');
Route::delete('/workers','WorkerController@index');