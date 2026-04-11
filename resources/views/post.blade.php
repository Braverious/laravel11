<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 mx-w-screen-md border-b border-gray-300">
        <h3 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{ $post['title'] }}</h3>
        <div class="text-base text-gray-500">

            <a href="#">{{ $post['author'] }}</a> | 11 April 2026
        </div>
        <p class="my-4 font-light">{{ ($post['body']) }}</p>
        <a href="/posts" class="font-medium text-blue-500">Back to post &laquo;</a>
    </article>


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
