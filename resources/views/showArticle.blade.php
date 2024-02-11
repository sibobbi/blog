<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-header></x-header>
<body>
<div class="container-fluid border-1">
    <div class="mx-auto w-50">
        <div class="row justify-content-center my-2">
            <div class="col-6">
               <h1>
                   {{ $article->title }}
               </h1>
                <h2>
                    Автор: {{ $article->author ? $article->author : 'Нету автора' }}
                </h2>
                <p>
                     {{ $article->body }}
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
