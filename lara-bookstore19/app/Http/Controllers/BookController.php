<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    //create with "php artisan make:controller BookController"

    public function index(){
        $books = Book::all();
        return view ('books.index', compact('books'));
    }

    public function show($book){
        $book = Book::find($book);
        return view ('books.show', compact('book'));
    }
}
