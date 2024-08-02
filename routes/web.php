<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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

// Route pour afficher la page d'accueil du projet 
Route::get('/', [CommentController::class, 'liste_comment'])->name('master.index');

// Route pour la page de creation 
Route::get('create', [PostController::class, 'create_post']);
Route::post('create/traitement', [PostController::class, 'create_traitement']);

// Route pour representer les commentaires 
 Route::get('ajouter', [CommentController::class, 'ajouter_comment']);
 Route::post('ajouter/traitement', [CommentController::class, 'ajouter_comment_traitement']);

 Route::delete('/comments/{id}', [CommentController::class, 'delete'])->name('comments.delete');

 Route::get('/modifier/{id}',[CommentController::class,'update']);
Route::post('/modifier/traitement', [CommentController::class, 'modifier_comment_traitement']);

//Route pour le post
 Route::get('add', [PostController::class, 'add_post'])->name('master.add');

Route::get('/modify/{id}',[PostController::class,'update']);
Route::post('/modify/traitement', [PostController::class, 'modifier_post_traitement']);

Route::delete('/supprimer/{id}', [PostController::class, 'delete'])->name('post.delete');








