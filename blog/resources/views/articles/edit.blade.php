@extends('layouts.master')

@section('title')
    Editer l'article {{ $article->title }}
@endsection

@section('content')
    <form action="/article/{{ $article->id }}/edit" method="POST" enctype="multipart/form-data">
        {{-- @csrf --}}
        {{ csrf_field() }}
        @method('patch')
        @include('partials.article-form')
    </form>
@endsection
