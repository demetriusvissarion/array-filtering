<?php

class Post
{
    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', 'JW', true),
    new Post('My Second Post', 'JW', true),
    new Post('My Third Post', 'AW', true),
    new Post('My Fourth Post', 'TR', false),
];

// $publishedPosts = array_filter($posts, function($post){
//     return $post->published;
// });

// $unpublishedPosts = array_filter($posts, function($post){
//     return !$post->published;
// });

// var_dump($publishedPosts);

//// map
// $modified = array_map(function ($post){
//     $post->published = true;
//     return $post;
// }, $posts);

//// foreach
// foreach($posts as $post) {
//     $post->published = true;
// }

//// map usage
// $modified = array_map(function ($post){
//     return ['title' => $post->title];
// }, $posts);

// $titles = array_map(function ($post) {
//     return $post->title;
// }, $posts);

// $titles = array_column($posts, 'title'); // same result as array-map but cleaner, works only when "public"

// foreach ($posts as $index => $post)
// {
//     $posts[$index] = (array) $post;
// }

$posts = array_map(function ($post){
    return (array) $post;
}, $posts);

// $titles = array_column($posts, 'title');
$authors = array_column($posts, 'author');

var_dump($authors);