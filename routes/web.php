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
    return view('home');
});

Route::get('/Header', function () {
    return view('header');
});
Route::get('/Footer', function () {
    return view('footer');
});
Route::get('/Menu', function () {
    return view('menu');
});
Route::get('/Main', function () {
    return view('main');
});

Route::get('/Master', function () {
    return view('Master/project');
});
