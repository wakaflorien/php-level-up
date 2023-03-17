<?php

$books = [
    [
        "title" => "The river between",
        "author" => "Ngugi awa",
        "downloadUrl" => "https://example.com",
        "releaseDate" => 2013,
    ],
    [
        "title" => "Five feet apart",
        "author" => "Vincent wanyama",
        "downloadUrl" => "https://example.com",
        "releaseDate" => 2014,
    ]
];

$filteredBooks = array_filter($books, function ($book) {
    return $book['releaseDate'] >= 2013 && $book['releaseDate'] <= 2023;
});

require "index.view.php";

