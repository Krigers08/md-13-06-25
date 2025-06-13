<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index',compact('books'));
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:125',
            'released_at' => 'required|date',
        ]);

        $book = Book::create($validatedData);

        return redirect('/books/' . $book->id);
    }

    public function show($id) {
        $book = Book::find($id);
        return view('books.show', ['singleBook' => $book]);
    }

    public function edit($id) {
        $book = Book::find($id);
        return view('books.edit', ['editBook' => $book]);
    }

    public function update(Request $request, $id) {
        $book = Book::find($id);
        $book->update([
            'title' => $request['title'],
            'author' => $request['author'],
            'released_at' => $request['released_at'],
        ]);

        return redirect('/books/' . $book->id);
    }

    public function destroy($id) {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
