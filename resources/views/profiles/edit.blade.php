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
        <h1 class="text-2xl font-bold mb-4">Edit</h1>

        <form action="/profile/{{ $profile->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="font-bold text-gray-800">Title</label>
                <input type="text"
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                    id="title" name="title" value="{{ $profile->title }}">
            </div>

            <div class="mb-4">
                <label for="content" class="font-bold text-gray-800">Content</label>
                <textarea name="content"
                    class="h-24 bg-white border border-gray-300 rounded py-4 px-3 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">{{ $profile->content }}</textarea>
            </div>

            <button
                class="bg-indigo-500 text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>

        </form>
    </div>

</body>

</html>