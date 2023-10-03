<?php

use App\Http\Controllers\ComicController;
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

// idenx

Route::get("/", [ComicController::class, "index"])->name("comics.index");

// create e store

Route::get("/comics/create", [ComicController::class, 'create'])->name('comics.create');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// show

Route::get("/{comic}", [ComicController::class, "show"])->name("comics.show");

// update

Route::get("/comics/{id}/edit", [ComicController::class, "edit"])->name("comics.edit");
Route::put("/comics/{id}", [ComicController::class, "update"])->name("comics.update");

// destroy(delete)

Route::delete("/comics/{id}", [ComicController::class, "destroy"])->name("comics.destroy");




