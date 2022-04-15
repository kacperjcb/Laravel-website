<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div style="width: 900px;" class="container max-w-full mx-auto pt-4">

        @method('PUT')
        @csrf
        <form action="{{$todolist->id}}" method="post" autocomplete="off" accept-charset="UTF-8">
            @csrf
        <div class="mb-4">
            <label class="font-bold text-gray-800" for="title">Nick: </label>
            <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content" value="{{ $todolist->content }}">
        </div>

        <div class="mb-4">
            <label class="font-bold text-gray-800" for="content2">Wiadomość: </label>
            <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content2" name="content2">{{ $todolist->content2 }}</textarea>
        </div>

        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>



        </form>
    </form>
</div>
</body>
</html>