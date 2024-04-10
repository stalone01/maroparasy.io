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

Route::get('/', [ProController::class, 'index'])->name('welcome');
Route::get('/list.comment', [ProController::class, 'show_comments'])->name('listComment');
Route::get('/create.comments', [ProController::class, 'create'])->name('comments');
Route::get('/create.contactUs', [ProController::class, 'create'])->name('contactUs');
Route::post('/store', [ProController::class, 'store'])->name('store');
