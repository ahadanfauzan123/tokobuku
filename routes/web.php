<?php

use Illuminate\Support\Facades\Route;

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
//     return view('pages.home');
// });
Route::get('/', function () {
    return view('pages.home');
});
Route::get('/register', function () {
    return view('pages.register');
});
Route::get('/pages.login', function () {
    return view('pages.login');
});
