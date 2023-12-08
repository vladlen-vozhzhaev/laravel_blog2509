@extends('template')
@section('content')
    <h2>{{$article->title}}</h2>
    <div>{{$article->content}}</div>
    <p>{{$article->author}}</p>
    <hr>
    <form action="/addComment" method="post">
        @csrf
        <input type="hidden" name="articleId" value="{{$article->id}}">
        <div class="mb-3">
            <textarea name="comment" class="form-control" placeholder="Комментарий"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" value="Добавить комментарий">
        </div>
    </form>
@endsection
