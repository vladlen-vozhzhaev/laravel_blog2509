@extends('template')
@section('content')
    <h1 class="text-center">Добавление статьи</h1>
    <div class="col-sm-6 mx-auto">
        <form action="/addArticle" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="title" placeholder="Заголовок">
            </div>
            <div class="mb-3">
                <textarea name="article" class="form-control" placeholder="Текст статьи"></textarea>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="author" placeholder="Автор">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Добавить">
            </div>
        </form>
@endsection
