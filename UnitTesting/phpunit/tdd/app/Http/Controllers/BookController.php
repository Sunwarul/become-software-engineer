<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        return Book::all();
    }

    public function store(BookStoreRequest $request)
    {
        $book = Book::create($request->validated());

        return \redirect("/books/$book->id");
    }

    public function update(BookUpdateRequest $request, Book $book)
    {
        // $book = Book::find($id);
        $book->update($request->validated());
    }

    public function destroy(Book $book): void
    {
        $book->delete();
    }
}
