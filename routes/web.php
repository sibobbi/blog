<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

Route::get('/', [ArticleController::class,'list'])->name('article.list');

Route::prefix('article')->group(function (){

    Route::get('/new', function (){
        return view('newArticle');
    })->name('article.new');
    Route::get('/{article}',[ArticleController::class,'show'] )->name('article.show');
    Route::post('/new',[ArticleController::class,'store'])->name('article.new.post');
});
