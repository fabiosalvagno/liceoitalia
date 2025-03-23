<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;

Route::get('/', function () {
    return view('new-home');
});


Route::get('/books', function () {
    $books = Book::all();  // シンプルに全書籍取得
    return view('books', ['books' => $books]);
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/courses/a2', function () {
    return view('courses.a2');
});

Route::get('/courses/b2', function () {
    return view('courses.b2');
});
