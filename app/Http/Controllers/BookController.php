<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all()->groupBy('linkspiega'); // raggruppa i libri per categoria
        return view('books', compact('books'));
    }
}
