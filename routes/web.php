<?php

use App\Http\Controllers\ColiController;
use App\Http\Controllers\ImgAController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProController;
use Illuminate\Support\Facades\Route;

//route pour le stokage d'imageAccueil
Route::get('/insert-image',[ImgAController::class, 'index']);
Route::post('/insertion-imgAc',[ImgAController::class, 'store'])->name('insertionImage');

Route::get('/', [ProController::class, 'index'])->name('welcome'); //page principale

//route pour les comments

Route::get('/list.comment', [ProController::class, 'showComments'])->name('listComment'); //Affiche le liste des comments

Route::post('/create-comments', [ProController::class, 'createComment'])->name('comments'); //Enregistre des comments

//routes pour creation commentaires collines
Route::post('/commentaireC/{id}', [ColiController::class, 'createCommentC'])->name('commentC'); //Enregistre des comments


//Route pour les posts

Route::post('/update-posts', [PostsController::class, 'updatePost'])->name('updatePost'); //Update les Enregistrements

Route::get('/list.posts', [PostsController::class, 'showPosts'])->name('listPost'); //Affiche le liste
Route::get('/delete-posts/{id}', [PostsController::class, 'delete_posts'])->name('deletePosts');

Route::post('/create-posts', [PostsController::class, 'createPosts'])->name('posts'); //Enregistre des messages

Route::get('/update-posts/{id}', [PostsController::class, 'updatePosts'])->name('updateposts'); //lien vers la page de modification

