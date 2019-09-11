<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index()
    {
      $books = Book::all();
      return view('index',[
          "books" => $books
      ]);
    }

    public function create(Request $request)
    {
        $book = new Book();
        $book->name = $request->book_title;
        $book->image = $request->book_image;
        $book->save();
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        
        if ($request->unread) {
          $book->status = "unread";
        }elseif ($request->reading) {
          $book->status = "reading";
        }elseif ($request->finished){
          $book->status = "finished";
        }

        $book->save();
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        Book::find($request->id)->delete();
        return redirect('/');
    }
}
