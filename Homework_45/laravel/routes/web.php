<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CardsController;




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

Route::get('/', 'CardsController@index');
Route::get('/create', 'CardsController@create');
Route::post('/', 'CardsController@store');
Route::get('/card/{id}', 'CardsController@show');
Route::get('{id}/edit', 'CardsController@edit');
Route::put('/card/{id}', 'CardsController@update');
Route::delete('/card/{id}', 'CardsController@destroy');

Route::get('/left-slidebar', function () {
    return view('left-slidebar');
});

Route::get('/right-slidebar', function () {
    return view('right-slidebar');
});

Route::get('/no-slidebar', function () {
    return view('no-slidebar');
});
