<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

<<<<<<< HEAD
        <a href="/water"
            class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow-lg">Go
            Back</a>

        <form action="/water/{{ $water->id }}" method="POST">
=======
        <a href="/my"
            class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow-lg">Go
            Back</a>

        <form action="/my/{{ $my->id }}" method="POST">
>>>>>>> 4c863473c1032926c248cec867e1948439a86900
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="title" class="font-bold text-gray-800">Title</label>
                <input type="text"
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
<<<<<<< HEAD
                    id="title" name="title" value="{{ $water->title }}">
=======
                    id="title" name="title" value="{{ $my->title }}">
>>>>>>> 4c863473c1032926c248cec867e1948439a86900
            </div>

            <div class="mb-4">
                <label for="content" class="font-bold text-gray-800">Content</label>
                <textarea type="text"
                    class="h-24 bg-white border border-gray-300 rounded py-4 px-3 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
<<<<<<< HEAD
                    id="content" name="content">{{ $water->content }}</textarea>
=======
                    id="content" name="content">{{ $my->content }}</textarea>
>>>>>>> 4c863473c1032926c248cec867e1948439a86900
            </div>

            <button class="bg-indigo-500 text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update
            </button>

<<<<<<< HEAD
            <a href="/water"
=======
            <a href="/my"
>>>>>>> 4c863473c1032926c248cec867e1948439a86900
                class="bg-gray-500 text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow ">Cancel
            </a>
        </form>

<<<<<<< HEAD
        <form action="/water/{{ $water->id }}" method="POST">
=======
        <form action="/my/{{ $my->id }}" method="POST">
>>>>>>> 4c863473c1032926c248cec867e1948439a86900
            @csrf
            @method('DELETE')

            <button class="bg-red-500 text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete
            </button>
        </form>

    </div>
</body>

</html>