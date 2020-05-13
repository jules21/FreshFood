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
Route::get('/dashboard', function () {
    return view('layouts.master');
});
Route::resource('/products', 'ProductController');
Route::resource('/categories', 'CategoryController');
Route::resource('/measures', 'MeasureController');

Route::resource('/products/{product}/uploads', 'UploadController');
