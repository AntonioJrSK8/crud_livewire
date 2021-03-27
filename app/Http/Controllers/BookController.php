<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        return view('book.index');
    }

    public function create()
    {
        return view('book.create');
    }

    public function show(Book $book)
    {
        return view('book.show');
    }

    public function edit(Book $book)
    {
        return view('book.edit');
    }

    
}
