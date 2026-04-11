<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'John Doe', 'title' => 'About Page']);
});

Route::get('/posts/{slug}', function ($slug) {
    // dd($id);
    $posts = [
        [
            'id' => 1,
            'slug' => 'teks-artikel-1',
            'title' => "Teks Artikel 1",
            'author' => 'Awe Welas',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic ratione mollitia quod veritatis facilis.
        Assumenda aperiam rem blanditiis nulla delectus, voluptatum porro, distinctio minima animi totam magnam eos
        deserunt est?'
        ],
        [
            'id' => 2,
            'slug' => 'teks-artikel-2',
            'title' => "Teks Artikel 2",
            'author' => 'Awe Welas',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum et praesentium eveniet in omnis vitae perferendis quasi, totam ad velit dignissimos eius sapiente vero possimus itaque reprehenderit reiciendis accusamus cumque.'
        ]
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Blog Post', 'post' => $post]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'teks-artikel-1',
            'title' => 'Teks Artikel 1',
            'author' => 'Awe Welas',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic ratione mollitia quod veritatis facilis.
            Assumenda aperiam rem blanditiis nulla delectus, voluptatum porro, distinctio minima animi totam magnam eos
            deserunt est?'
        ],
        [
            'id' => 2,
            'slug' => 'teks-artikel-2',
            'title' => 'Teks Artikel 2',
            'author' => 'Awe Welas',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum et praesentium eveniet in omnis vitae perferendis quasi, totam ad velit dignissimos eius sapiente vero possimus itaque reprehenderit reiciendis accusamus cumque.'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
