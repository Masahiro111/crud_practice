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

    <div style=width:900; class="container max-w-full mx-auto pt-4">

        <h1 class="text-2xl font-bold mb-4">Create Coffee Blog</h1>

        <form action="/coffee" method="POST">
            @csrf

            <a href="/coffee"
                class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 rounded shadow-lg hover:shadow mt-2">New
                Back Index</a>

            <div class="mb-4">
                <label for="title" class="font-bold text-gray-800">Title</label>
                <input type="text" id="text" name="title"
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">
            </div>

            <div class="mb-4">
                <label for="content" class="font-bold text-gray-800">Content</label>
                <input type="text" id="text" name="content"
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">
            </div>

            <button class="bg-indigo-500 text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create
            </button>
        </form>

    </div>

</body>

</html>