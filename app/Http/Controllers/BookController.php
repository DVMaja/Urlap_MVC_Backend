<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        $books = Book::all(); //összes book lekérése
        return response()->json($books);
    }
    public function store(Request $request) //POST
    {
        $book = new Book();
        $book->cim = $request->cim;
        $book->iro = $request->iro;
        $book->kiadasEv = $request->kiadasEv;
        $book->save();
        return Book::find($book->id);
    }
    public function destroy($id)
    {
        //Book::find($id)->delete();
        $book = Book::find($id)->delete();
        return response()->json(['message' => 'Sikeres törlés!'], 201);
    }
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->cim = $request->cim;
        $book->iro = $request->iro;
        $book->kiadasEv = $request->kiadasEv;
        $book->save();
    }
    public function show($id)
    {
        $books = Book::find($id);
        return $books;
    }
}
