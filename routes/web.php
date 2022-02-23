<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;

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
    return view('index', ['name' => 'Nayeem']);
});

// Route::view('/', 'index');

Route::get(md5('about-us'), function () {
    return view('about', ['name' => 'About']); 
})->name('about.us'); //name route


Route::get('/contact', function () {
    return view('contact', ['name' => 'Contact']);  //
});

Route::get('/basicM', function () {
    return view('list');
})->middleware('basicM');
// });


Route::post('/students/info', [FirstController::class, 'studentinfo']) ->name('student.info');
Route::post('/about/info', [FirstController::class, 'aboutinfo']) ->name('about.info');

Route::get('/nayeemasha', [SecondController::class, 'nayeemasha']);



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
