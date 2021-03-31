<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>
    <div class="w-4/5 m-auto py-4">
        <h1 class="text-4xl font-bold mb-5">Laravel Blog</h1>
        <a href="/posts/create" class="bg-green-500 text-white px-3 py-1
                inline-block mb-5 rounded shadow-lg hover:shadow">
            Add New Post
        </a>
        @foreach ($posts as $post)
        <article class="mb-5">
            <h2 class="text-x1 font-bold text-gray-900">
                {{ $post->title }}
            </h2>
            <p class="text-md text-gray-600">
                {{ $post->content }}
            </p>
            <a href="/posts/{{ $post->id }}/edit" class="bg-blue-500 tracking-wide text-white px-3 py-1
                inline-block mt-2 rounded shadow-lg hover:shadow">
                <i class="fas fa-edit"></i> Edit
            </a>
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 text-white tracking-wide px-1 py-1
                inline-block mt-2 rounded shadow-lg hover:shadow">
                    <i class="far fa-trash-alt"></i> Delete
                </button>
            </form>

            <hr class="mt-3">
        </article>
        @endforeach
    </div>
</body>

</html>