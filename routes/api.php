<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticlesController;

Route::get('/', function () {
    return "Back-end Challenge 2021 - Space Flight News";
});


Route::get('/articles',  [ArticlesController::class, 'showArticles']);

Route::get('/articles/{id}',  [ArticlesController::class, 'getArticle']);

Route::get('/saveArticles',  [ArticlesController::class, 'saveArticles']);

Route::put('/articles/{id}', [ArticlesController::class, 'updateArticle']);

Route::post('/articles', [ArticlesController::class, 'createArticle']);

Route::delete('/articles/{id}', [ArticlesController::class, 'deleteArticle']);

