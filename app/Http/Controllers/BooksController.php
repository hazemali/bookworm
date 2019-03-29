<?php

namespace App\Http\Controllers;

use App\Book;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view ('books.read', compact('books'));
    }

    public function create()
    {
        return view("books.create");
    }

    public function store()
    {
        
        $attributes = request()->validate([
    		"title" => ["required", "min:3"],
    		"summary" => ["required", "min:3"]
        ]);

        Book::create($attributes);

        return redirect("/books");
    }

    public function show(Book $book)
    {
        return view("books.view", compact("book"));
        
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }

    public function update(Book $book)
    {
        $attributes = request()->validate([
    		"title" => ["required", "min:3"],
    		"summary" => ["required", "min:3"]
        ]);

        $book->update($attributes);
        return redirect("/books");
    }

    public function edit(Book $book)
    {
        return view("books.edit", compact("book"));
    }
}
