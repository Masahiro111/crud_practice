<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Index</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

    <div style=width:900px; class="container max-w-full mx-auto pt-4">

        <h1 class="text-2xl font-bold mb-4">Coffee Blog</h1>

        <a href="/coffee/create"
            class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 rounded shadow-lg hover:shadow mt-2">New
            Coffee Blog</a>

        @foreach ($coffees as $item)
        <article class="mb-2">
            <a href="/coffee/{{$item->id}}/edit" class="text-xl">{{ $item->title }}</a>
            <p class="text-sm text-gray-600">{{ $item->content }}</p>
        </article>
        <hr class="mt-2">
        @endforeach

    </div>

</body>

</html>