<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - create</title>
</head>

<body>

    <div style="width: 900px;" class="container max-w-full mx-auto pt-4"></div>

    <form action="/blogs" method="POST">
        @csrf

        <div class="mb-4">
            <label for="title" class="font-bold text-gray-800">Title</label>
            <input type="text" id="text" name="text"
                class="h-10 bg-white border border-gray-300 rounded py-4 px-3 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">
        </div>

        <div class="mb-4">
            <label for="title" class="font-bold text-gray-800">Title</label>
            <input type="text" id="text" name="text"
                class="h-10 bg-white border border-gray-300 rounded py-4 px-3 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">
        </div>
    </form>

</body>

</html>