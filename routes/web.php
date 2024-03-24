<?php
use Illuminate\Support\Facades\Route;

// INICIO
Route::get('/', function () {return view('index');});

// CONTACTO
Route::get('/contact',        function () {return view('contact');});
Route::get('/thankyou',        function () {return view('thankyou');});

// PAGES
Route::get('/about',        function () {return view('about');});
Route::get('/videos',       function () {return view('videos');});

// GALLERY's
Route::get('/gallery',      function () {return view('gallery');});
Route::get('/architecture', function () {return view('cat-gallery.architecture');});
Route::get('/food-styling', function () {return view('cat-gallery.food-styling');});
Route::get('/groups',       function () {return view('cat-gallery.groups');});
Route::get('/comercial',    function () {return view('cat-gallery.comercial');});
