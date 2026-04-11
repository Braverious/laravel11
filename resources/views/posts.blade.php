{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Blog</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>
    <h1>Selamat Datang di Halaman Blog</h1>
    <article>
        <h3>Judul Artikel 1</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic ratione mollitia quod veritatis facilis. Assumenda aperiam rem blanditiis nulla delectus, voluptatum porro, distinctio minima animi totam magnam eos deserunt est?</p>
    </article>
      <article>
        <h3>Judul Artikel 2</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic ratione mollitia quod veritatis facilis. Assumenda aperiam rem blanditiis nulla delectus, voluptatum porro, distinctio minima animi totam magnam eos deserunt est?</p>
    </article>
</body>
</html> --}}

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3 style="text-xl">Welcome to the Blog hehe</h3> --}}
    @foreach ($posts as $post)
        <article class="py-8 mx-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}">
                <h3 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{ $post['title'] }}</h3>
            </a>
            <div class="text-base text-gray-500">

                <a href="#">{{ $post['author'] }}</a> | 11 April 2026
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500">Read More &raquo;</a>
        </article>
    @endforeach

    {{-- <article class="py-8 mx-w-screen-md border-b border-gray-300">
        <h3 class="mb-1 text-3xl tracking-light font-bold text-gray-900">Judul Artikel 2</h3>
        <div class="text-base text-gray-500">
            <a href="#">Awe Welas</a> | 10 April 2026
        </div>
        <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum et praesentium eveniet
            in omnis vitae perferendis quasi, totam ad velit dignissimos eius sapiente vero possimus itaque
            reprehenderit reiciendis accusamus cumque.</p>
        <a href="#" class="font-medium text-blue-500">Read More &raquo;</a>
    </article> --}}
</x-layout>
