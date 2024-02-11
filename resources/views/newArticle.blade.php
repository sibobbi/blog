<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-header></x-header>
<body>
<div class="container-fluid border-1">
    <div class="mx-auto w-50">
        <div class="row justify-content-center my-2">
            <div class="col-10">
                <form method="POST" class="border border-black" action="{{ route('article.new.post') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="author">Автор</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}">
                    </div>
                    <div class="form-group">
                        <label for="brief">Бриф</label>
                        <input type="text" class="form-control" id="brief" name="brief" value="{{ old('brief') }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Текст</label>
                        <br>
                        <textarea name="body" id="body" cols="72"> {{ old('body') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary my-2 w-100" >Создать</button>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
