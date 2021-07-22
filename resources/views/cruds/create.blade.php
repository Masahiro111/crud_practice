<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

        <form action="/crud" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="font-bold text-gray-800">Title</label>
                <input type="text"
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                    id="title" name="title" value="">
            </div>

            <div class="mb-4">
                <label for="title" class="font-bold text-gray-800">Title</label>
                <textarea name="content" id="contenet" cols="30" rows="10"
                    class="h-24 bg-white border border-gray-300 rounded py-4 px-3 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">
                </textarea>
            </div>

            <button class="bg-indigo-500 text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
                Create
            </button>
        </form>

    </div>
</body>

</html>