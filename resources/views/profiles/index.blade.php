<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Index</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body>

    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-2xl font-bold mb-4">My Profile</h1>

        <a href="/profile/create"
            class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow mt-2">New
            Profile
        </a>

        @foreach ($profiles as $item)
        <article class="mb-2">
            <a href="/profile/{{$item->id}}/edit" class="text-xl font-bold text-blue-700">
                {{$item->title}}
            </a>
            <p class="text-sm text-gray-600">{{ $item->content }}</p>
        </article>
        @endforeach
    </div>

</body>

</html>