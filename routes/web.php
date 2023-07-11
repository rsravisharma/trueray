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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/cor-events', function () {
    return view('pages.cor_events');
});

Route::get('/eon', function () {
    return view('pages.eon');
});

Route::get('/private-events', function () {
    return view('pages.private_events');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/snaps', function () {
    return view('pages.snaps');
});

Route::get('/wedding-planning', function () {
    return view('pages.wedding_planning');
});
