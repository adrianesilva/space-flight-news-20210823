<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{


    public function saveArticles(){

        $input = file_get_contents('https://api.spaceflightnewsapi.net/v3/articles'); 
        $apiArticles = json_decode($input);
        $articleDB = new Articles;

        foreach($apiArticles as $article){
            
            $launches = implode(',',$article->launches);
            $events = implode(',',$article->events);

            $result = Articles::firstOrCreate(
                ['id' => $article->id,
                'featured' => $article->featured,
                'title' => $article->title,
                'url' => $article->url,
                'imageUrl' => $article->imageUrl,
                'newsSite' => $article->newsSite,
                'summary' => $article->summary,
                'publishedAt' => $article->publishedAt,
                'launches' => $launches,
                'events' => $events
                ]
           );
   
        }
        
    }
}
