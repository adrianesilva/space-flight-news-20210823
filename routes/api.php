<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticlesController;
use App\Models\Articles;

Route::get('/', function () {
    return "Back-end Challenge 2021 - Space Flight News";
});


Route::get('/articles', function () {
    return Articles::paginate(20);
});

Route::get('/saveArticles',  [ArticlesController::class, 'saveArticles']);


