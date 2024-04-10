<?php

use App\Http\Controllers\PostsController;
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

//route pour les comments

Route::get('/list.comment', [ProController::class, 'show_comments'])->name('listComment'); //Affiche le liste des comments

Route::post('/create-comments', [ProController::class, 'createComment'])->name('comments'); //Enregistre des comments



//Route pour les pots

Route::get('/list.posts', [PostsController::class, 'showPosts'])->name('listPost'); //Affiche le liste

Route::post('/create-posts', [PostsController::class, 'createPosts'])->name('posts'); //Enregistre des messages
Route::post('/update-posts', [PostsController::class, 'updatePost'])->name('upPosts'); //Update des Enregistrements
Route::get('/update-posts/{id}', [PostsController::class, 'updatePosts'])->name('updateposts'); //lien vers la page de modification

