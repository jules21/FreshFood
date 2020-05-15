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
// Route::resource('/products', 'ProductController');
// Route::resource('/categories', 'CategoryController');
// Route::resource('/measures', 'MeasureController');

Route::resources([
    'products' => 'ProductController',
    'categories' => 'CategoryController',
    'measures' => 'MeasureController',
]);

Route::get('/products/{product}/uploads', 'UploadController@create')->name('uploads.create');
Route::post('/uploads{product}', 'UploadController@store')->name('uploads.store');
Route::get('/products/{product}/photos', 'UploadController@show')->name('uploads.show');
Route::delete('/products/{product}/uploads', 'UploadController@destroy')->name('uploads.destroy');

Route::get('/', 'freshFoodPages@home');
Route::get('/shop', 'freshFoodPages@shop');
Route::get('/contact_us', 'freshFoodPages@contact');
Route::get('/about_us','freshFoodPages@about');
