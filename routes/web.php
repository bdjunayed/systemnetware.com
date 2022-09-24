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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// System netware routes
Route::get('/', function () {
    return view('index');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/ourclients', function () {
    return view('ourclients');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

//Contacts form
// Route::post('/contacts', 'ContactUsController@store')->name('contactUsForm.store');
Route::post('/contacts', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contactUsForm.store');