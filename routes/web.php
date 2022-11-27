<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\PublisherController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [BooksController::class, 'index']);

Route::get('/detail/{id}', [BooksController::class, 'bookdetail']);

// Route::get('/publisher', function () {
//     return view('publisher');
// });

Route::get('/publisher', [PublisherController::class, 'index']);

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/contact', function () {
    return view('contact');
});
