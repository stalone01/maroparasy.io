<?php

use App\Http\Controllers\ProController;
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

Route::get('/', [ProController::class, 'index'])->name('welcome'); //page principale

Route::get('/list.comment', [ProController::class, 'show_comments'])->name('listComment'); //Affiche le liste des comments

Route::post('/create-comments', [ProController::class, 'createComment'])->name('comments'); //Enregistre des comments

Route::post('/create.contactUs', [ProController::class, 'createContact'])->name('contactUs');
Route::post('/store', [ProController::class, 'store'])->name('store');
