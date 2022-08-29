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

// HOME PAGE
Route::get('/', function () {
    return view('welcome');
});

// SHOW ALL LISTINGS
Route::get('/{property_type}/{listing_type}/', function () {
    return view('welcome');
});

// SINGLE LISTING
Route::get('/listing/{}/{id}', function () {
    return view('welcome');
});

// USER LOGIN
Route::get('/login', function () {
    return view('welcome');
});

// USER REGISTER
Route::get('/register', function () {
    return view('welcome');
});

// USER SAVED STATUS
Route::get('/account/saved', function () {
    return view('welcome');
});

// USER SHOWING STATUS
Route::get('/account/show-status', function () {
    return view('welcome');
});
