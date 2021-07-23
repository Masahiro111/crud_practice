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

        <a href="/archive">go back</a>

        <form action="/archive/{{ $archive->id }}" method="POST">
            @method('PUT')
            @csrf

            <div>
                <label for="title">Title</label>
                <input type="text" name="title">
            </div>

            <div>
                <label for="content">Content</label>
                <textarea name="content" id="" cols="30" rows="10">
                    {{ $archive->content }}
                </textarea>
            </div>

            <button class="bg-indigo-500 text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update
            </button>

            <a href="/archive"
                class="bg-gray-500 text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow ">Cancel
            </a>

        </form>


    </div>
</body>

</html>