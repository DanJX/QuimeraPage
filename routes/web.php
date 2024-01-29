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
// INICIO
Route::get('/', function () {return view('index');});

// PAGES
Route::get('/about', function () {return view('about');});
Route::get('/contact', function () {return view('contact');});
Route::get('/gallery', function () {return view('gallery');});
Route::get('/videos', function () {return view('videos');});