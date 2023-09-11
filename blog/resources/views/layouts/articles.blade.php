<h2>Nos Articles 🤗</h2>

@if ($articles)
    @foreach ($articles as $article)
        @include('articles.index')
    @endforeach
@else
    @include('articles.no-articles')
@endif

{{-- @forelse ($articles as $article)
    @include('articles.index')
@empty
    @include('articles.no-articles')
@endforelse --}}


{{-- @each('articles.index', $articles, 'article', 'articles.no-articles.blade.php') --}}
{{-- <h2>La page des articles !</h2>
@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('content')
    <h2>Articles</h2>
    @foreach ($articles as $article)
        <p>{{ $article['title'] }}</p>
        <p>{{ $article['body'] }}</p>
    @endforeach
@endsection --}}
