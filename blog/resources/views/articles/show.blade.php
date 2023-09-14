<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My comment</title>
</head>

<body>
    @extends('layouts.master')
    @section('content')
        {{-- <p>Show me your anger !</p> --}}
        <h3 class="card-title">L'auteur de cet article : {{$article->user->name}}</h3>
        <div>
            <strong>Titre de l'article : </strong> {{ $article->title }}
        </div>
        <div>
            <a href="/article/{{$article->id}}/edit">Editer l'article</a>
        </div>
        <h4>Les Commentaires sur l'article :</h4>
        @foreach ($article->comments as $comment)
            <p><strong>{{ $comment->user->name }}</strong> a réagi : </p>
            <p>{{ $comment->comment }}</p>
            <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
        @endforeach
    @endsection
</body>

</html>
