<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        // Fetch categories with their associated books
        $categories = Category::with('books')->get();

        // Pass the categories to the view
        return view('books', compact('categories'));
    }
}
