<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
</head>

<body>

    <div style=width:900px; class="container max-w-full mx-auto pt-4">

        <h1 class="text-2xl font-bold mb-4">Task Blog</h1>

        <a href="/task/create"
            class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 rounded shadow-lg hover:shadow mt-2">New
            Task Blog</a>

        @foreach ($tasks as $task)
        <article class=mb-2>
            <a href="/task/{{ $task->id }}/edit" class="text-xl">{{ $task->title }}</a>
            <p class="text-sm text-gray-600">{{ $task->content}}</p>
        </article>
        <hr class="mt-2">
        @endforeach
    </div>

</body>

</html>