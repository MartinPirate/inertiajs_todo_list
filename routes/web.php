<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Home');
});


Route::get('/users', function () {
    return Inertia::render('Users', [
        'time'=> Carbon::now()->toTimeString()
    ]);
});


Route::get('/todos', function () {
    sleep(2);
    return Inertia::render('Todos');
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});


Route::post('/logout', function () {
   dd("user Logged out");
});


