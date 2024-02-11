<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-header></x-header>
<body>
<div class="container-fluid border-1">
    <div class="mx-auto w-50">
        <div class="row justify-content-center my-2">
            <div class="col-10">
                <a class="btn btn-primary w-100" href="{{route('article.new')}}">Создать</a>
            </div>
        </div>
        <div class="row ">
            <div class="col border border-dark">Название</div>
            <div class="col border border-dark">Автор</div>
            <div class="col border border-dark">Бриф</div>
        </div>
        @foreach($articles as $article)
            <a href="{{ route('article.show',['article'=>$article->id]) }}" text-decoration="none">
                <div class="row">
                    <div class="col border border-dark">{{ $article->title }}</div>
                    <div class="col border border-dark">{{ $article->author ? $article->author : 'Нет автора' }}</div>
                    <div class="col border border-dark">{{ $article->brief }}</div>
                </div>
            </a>
        @endforeach
        <div class="row justify-content-center my-2">
            <div class="col-4"></div>
            <div class="col-4 mx-auto">
                {{ $articles->links() }}
            </div>
            <div class="col-4"></div>
        </div>
            </div>
        </div>
    </body>
</html>
