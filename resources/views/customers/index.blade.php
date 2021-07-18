<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel index</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

        <h1 class="text-2xl font-bold mb-4">My Blog</h1>

        <a href="/customer/create"
            class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow mt-2">Add
            Post
        </a>

        @foreach($customers as $customer)
        <article class="mb-2">
            <a href="/customer/{{ $customer->id }}/edit"
                class="text-xl font-bold text-blue-700">{{ $customer->title }}</a>
            <p class="text-sm text-gray-600">{{ $customer->content }}</p>
        </article>
        @endforeach

    </div>
</body>

</html>