<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About page']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog page', 'posts' => [
    [
        "id" => '1',
        'slug' => 'Judul-artikel-1',
        "title" => 'rizky anjassss',
        "author" => 'Rizky Maulana',
        "time" => "23 januari 2023",
        "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sed ea inventore explicabo eius voluptate ipsam dolorum, obcaecati, fugit qui numquam earum. Necessitatibus tempora porro blanditiis dignissimos consequuntur, magnam fuga!'
    ],
    [
        "id" => '2',
        'slug' => 'Judul-artikel-2',
        "title" => 'kealzzz',
        "author" => 'pandu',
        "time" => "1 mei 2023",
        "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quidem molestiae tempora, soluta quos veritatis, aperiam asperiores voluptate impedit accusamus, fugiat libero sed! Similique, tempore est veniam omnis facere assumenda.'
    ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            "id" => '1',
            'slug' => 'Judul-artikel-1',
            "title" => 'rizky anjassss',
            "author" => 'Rizky Maulana',
            "time" => "23 januari 2023",
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sed ea inventore explicabo eius voluptate ipsam dolorum, obcaecati, fugit qui numquam earum. Necessitatibus tempora porro blanditiis dignissimos consequuntur, magnam fuga!'
        ],
        [
            "id" => '2',
            'slug' => 'Judul-artikel-2',
            "title" => 'kealzzz',
            "author" => 'pandu',
            "time" => "1 mei 2023",
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quidem molestiae tempora, soluta quos veritatis, aperiam asperiores voluptate impedit accusamus, fugiat libero sed! Similique, tempore est veniam omnis facere assumenda.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'single post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact page']);
});
