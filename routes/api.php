<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticlesController;


Route::get('/', function () {
    return "Back-end Challenge 2021 - Space Flight News";
});

Route::get('/articles',  [ArticlesController::class, 'listArticles']);
Route::get('/saveArticles',  [ArticlesController::class, 'saveArticles']);

