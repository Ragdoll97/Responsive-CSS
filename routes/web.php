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
    return view('Portafolio');
});

Route::get('/ResponsiveWeb', 'App\Http\Controllers\ShowPagesController@showTeaWeb')->name('TeaWeb');
Route::get('/Login', 'App\Http\Controllers\ShowPagesController@ShowLogin')->name('Login');
Route::get('/CssWeb', 'App\Http\Controllers\ShowPagesController@ShowCssWeb')->name('CssWeb');
