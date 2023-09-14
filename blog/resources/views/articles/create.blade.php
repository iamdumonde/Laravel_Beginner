<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Form</title>
</head>

<body>
    @extends('layouts.master')
    @section('content')
        <h3>Here to create new article !</h3>
        <form action="articles/create" enctype="multipart/form-data" method="POST">
            @csrf
            @include('partials.article-form')
        </form>
    @endsection
</body>

</html>
