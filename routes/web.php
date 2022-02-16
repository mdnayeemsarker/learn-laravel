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


Route::get('/', function () { // root route or base route
    return view('welcome');
});

Route::get('/about', function () {
    return "about";
});

Route::get('/contact', function () {
    return "contact";
});


















Route::get('/testone', function () {
    nayeem::add();
});

Route::get('/test_one', function () {
    nayeem::add_one();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
