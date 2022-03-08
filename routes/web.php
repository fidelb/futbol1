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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('equips', 'App\Http\Controllers\EquipController')->middleware(['auth']);

Route::resource('partits', 'App\Http\Controllers\PartitController')->middleware(['auth']);

Route::resource('jugadors', 'App\Http\Controllers\JugadorController')->middleware(['auth']);

require __DIR__.'/auth.php';
