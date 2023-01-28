<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{

    public function getArticle($id){

        return Articles::find($id);
    }

    public function showArticles(){
        return Articles::paginate(20);
    }

    public function createArticle(Request $request){
        $article = new Articles;
        $article->create($request->all());
    }

    public function updateArticle(Request $request, $id)
    {
        $article = Articles::find($id);
        $article->update($request->all());
        
    }

    public function deleteArticle($id){
        $article = Articles::find($id);
        $article->delete();
    }

    public function saveArticles(){

        $input = file_get_contents('https://api.spaceflightnewsapi.net/v3/articles'); 
        $apiArticles = json_decode($input);
        $articleDB = new Articles;

        foreach($apiArticles as $article){

            $launches = json_encode($article->launches);

            $events = json_encode($article->events);

            $exist = Articles::find($article->id);

            if(!$exist){
                $result = Articles::firstOrCreate(
                    [
                        'id' => $article->id,
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
}
