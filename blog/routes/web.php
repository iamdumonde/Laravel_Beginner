<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.master');
// });

// //Route /contact-us
// Route::get('/contact-us', function () {
//     return view('layouts.contact');
// });

Route::get('/', [PagesController::class, 'index']);
Route::get('/contact-us', [PagesController::class, 'contact']);
Route::get('/about-us', [PagesController::class, 'about']);
Route::get('/articles', [ArticlesController::class, 'index']);
