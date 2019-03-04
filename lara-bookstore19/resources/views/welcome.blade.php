<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <h1>Hello, <?= $name; ?>!</h1>
        <h2>Hier sind deine Bücher:</h2>
        <ul>
            <!--<?php foreach ($books as $book){
                ?><li><?=$book->title; ?></li>
            <?php }; ?>-->
            @foreach ($books as $book)
                <li>{{$book->title}} (ISBN {{$book->isbn}}) --> Rating: {{$book->rating}}/10</li>
            @endforeach
        </ul>
    </body>
</html>
