<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/{id}', [HomeController::class, 'show'])->name('home.show');
Route::get('/test/create', [HomeController::class, 'create'])->name('home.create');
Route::post('/test/create', [HomeController::class, 'store'])->name('home.store');
Route::get('/test/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
Route::put('/test/edit/{id}', [HomeController::class, 'update'])->name('home.update');
Route::delete('/test/delete/{id}', [HomeController::class, 'destroy'])->name('home.delete');
