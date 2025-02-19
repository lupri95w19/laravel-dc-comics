<?php

use App\Http\Controllers\Guest\ComicController;
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

Route::get('/', [ComicController::class, "index"])->name("home");
Route::get('/{id}', [ComicController::class, "show"])->name("show");

// Fa comparire il form presumo
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

Route::get('/comics/edit/{id}', [ComicController::class, 'edit'])->name('comics.edit');
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');


