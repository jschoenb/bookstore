<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use \Illuminate\Support\Facades;

Route::get('/', function () {
    $name = "Dani";
    $books = DB::table('books')->get();
    //return $books; wichtig, damit man sieht, ob die DB abfrage passt

    /*return view('welcome', [
        'name' => $name
    ]);*/
    return view ('welcome', compact('name', 'books'));
});

Route::get('/books/{id}', function ($id) {
    $book = DB::table('books')->find($id);
    return view ('books.show', compact('book'));
});

Route::get('/books', function(){
    $books = DB::table('books')->get();
    return view ('books.index', compact('books'));
});
