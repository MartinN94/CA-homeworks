<?php

use Illuminate\Support\Facades\Route;
use App\PDF;

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

Route::get('/home', function () {

    PDF::WriteHTML('<h1>Hello world!</h1>');
    PDF::WriteHTML('<p> This is mpdf through Laravel facade proxy classes </p>');

    return PDF::Output();
});

Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::post('/contact-us', 'MailController@send');