<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
        rel="stylesheet">
</head>

<body>
    <div class="w-4/5 m-auto pt-5">
        <h1 class="font-bold text-2xl mb-5">Edit Post</h1>
        <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 
                inline-block mb-6 rounded shadow-lg hover:shadow">
            Go Back
        </a>
        <form action="/posts/{{ $post->id }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="title" class="font-bold text-gray-800">Title:
                </label>
                <input type="text"
                    class="h-10 bg-white border border-gray-300 rounded py-5 w-full"
                    id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-4">
                <label for="content" class="font-bold text-gray-800">Content:
                </label>
                <textarea type="text"
                    class="h-16 bg-white border border-gray-300 rounded py-5 w-full"
                    id="content" name="content">{{ $post->content }}</textarea>
            </div>
            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 
                inline-block mb-6 rounded shadow-lg hover:shadow">
                Update
            </button>
        </form>
    </div>
</body>

</html>