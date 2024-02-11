<?php

namespace App\Services;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
class CreateArticleService
{
    function make(StoreArticleRequest $request)
    {
        $article = Article::create([
            'title'=> $request->get('title'),
            'author'=> $request->get('author'),
            'brief'=> $request->get('brief'),
            'body'=> $request->get('body'),
            'created_at'=> \Carbon\Carbon::now(),
        ]);

        return $article;
    }
}
