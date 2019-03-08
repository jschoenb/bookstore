<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*\Illuminate\Support\Facades\DB::table('books')->insert([
            'title' => 'Herr der Ringel',
            'isbn' => '1234512345',
            'subtitle' => 'Die Rückkehr des Königs',
            'rating' => 10,
            'description' => 'Hat ein paar Oscars gewonnen',
            'published' => new DateTime()
        ]);*/
        $book = new App\Book();//wird auf fassade gemappt, fassade greift auf DBank
        $book->title = "Herr der Ringel";
        $book->isbn = '1234512345';
        $book->subtitle = "Die Rückkehr des Königs";
        $book->rating = 10;
        $book->description = "Hat ein paar Oscars gewonnen, hier darf man als Mann weinen";
        $book->published = new DateTime();
        $book->save();//speichern in der DB


        //update
        $book = App\Book::find(1);
        $book->title = "Neuer Title";
        $book->save();
        //delete: $book->delete();

        //findOrCreate updateOrCreate
        //$book = App\Book::findOrCreate(['title' => 'Buchtitel']);
    }
}
