<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    //
    public function listArticles(){

        foreach (Articles::all() as $article) {
            return $article->title;
        }
        
    }

    public function saveArticles(){

        $input = file_get_contents('https://api.spaceflightnewsapi.net/v3/articles'); 
        $apiArticles = json_decode($input);
        $articleDB = new Articles;

        foreach($apiArticles as $article){
            
            $articleDB->id = $article->id;
            $articleDB->title = $article->title;
            $articleDB->title = $article->title;
            $articleDB->title = $article->title;
            $articleDB->title = $article->title;
            $articleDB->title = $article->title;
            $articleDB->title = $article->title;
            $articleDB->title = $article->title;
            $articleDB->title = $article->title;
            $articleDB->title = $article->title;
            $articleDB->title = $article->title;
     
            $articleDB->save();
        }

    }
}
