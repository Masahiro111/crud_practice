<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive Index</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

    <div style="width:900;" class="container max-w-full mx-auto pt-4">
        <h1>My Archive</h1>

        <a href="/archive/create">New Create</a>

        @foreach ($archives as $item)
        <article>
            <a href="/archive/{{ $item->id }}/edit">{{ $item->title }}</a>
            <p>{{ $item->content }}</p>
        </article>
        <hr>
        @endforeach

    </div>
</body>

</html>