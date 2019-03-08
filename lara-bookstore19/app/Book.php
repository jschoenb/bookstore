<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    //protected $table = 'name_der_tabelle';

    //protected $guarded

    protected $fillable = ['isbn', 'title', 'subtitle',
    'published', 'rating', 'description', 'user_id'];//those can be edited via HTTP?!

    //QueryScopes --> präfix scope ($squery ist bereits der erste
    // teil eines queries, um ein verknüpftes query zu erhalten)
    //cmd with tinker: App\Book::favourite()->get() to test this method
    public function scopeFavourite($query){
        return $query->where('rating', '>=', 8);
    }

    /*public function all(){
        $result = DB::table('books')->get();
        return $result;
    }*/
}
