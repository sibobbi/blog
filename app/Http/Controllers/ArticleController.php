<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Services\CreateArticleService;

class ArticleController extends Controller
{
    private CreateArticleService $service;
    public function __construct()
    {
        $this->service = new CreateArticleService;
    }

    function list()
    {
        $articles = Article::query()->orderBy('created_at','DESC')->paginate(5);

        return view('index',['articles' => $articles]);
    }

    function show($article)
    {
        return view('showArticle',['article' => Article::find($article)]);
    }
    function store(StoreArticleRequest $request)
    {
        $this->service->make($request);

        return redirect('/');
    }
}
