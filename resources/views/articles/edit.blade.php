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
    <div>
        <form action="">
            @csrf

            <div class="mb-4">
                <label for="title" class="font-bold text-gray-800"></label>
                <input type="text"
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                    id="title" name="title" value="">
            </div>

            <div class="mb-4">
                <label for="" class="font-bold text-gray-800"></label>
                <label for="" class="font-bold text-gray-800"></label>
            </div>


        </form>

    </div>
</body>

</html>