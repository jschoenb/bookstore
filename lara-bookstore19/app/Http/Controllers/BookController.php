<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    //create with "php artisan make:controller BookController"

    public function index(){
        //load all books and relations with eager loading
        //eager loading loads everything in contrast to lazy loading

        $books = Book::with(['authors', 'images', 'user'])->get();
        return $books;
    }

    public function show($book){

    }
}
