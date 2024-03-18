<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;

// INICIO
Route::get('/', function () {return view('index');});

// CONTACTO
Route::get('/contact',            function () {return view('contact');})->name('contact');
Route::post('/enviar-correo',      function () {
    $datosForm = request()->all();
    Mail::to('dannycanul@hotmail.com')->send(new EnviarCorreo($datosForm));
    return redirect()->route('contact')->with('success', "Correo envíado con éxito");})->name('enviar-correo');

// PAGES
Route::get('/about',        function () {return view('about');});
Route::get('/videos',       function () {return view('videos');});

// GALLERY's
Route::get('/gallery',      function () {return view('gallery');});
Route::get('/architecture', function () {return view('cat-gallery.architecture');});
Route::get('/food-styling', function () {return view('cat-gallery.food-styling');});
Route::get('/groups',       function () {return view('cat-gallery.groups');});
Route::get('/comercial',    function () {return view('cat-gallery.comercial');});
