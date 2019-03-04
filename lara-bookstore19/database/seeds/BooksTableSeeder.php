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
        \Illuminate\Support\Facades\DB::table('books')->insert([
            'title' => 'Herr der Ringel',
            'isbn' => '1234512345',
            'subtitle' => 'Die Rückkehr des Königs',
            'rating' => 10,
            'description' => 'Hat ein paar Oscars gewonnen',
            'published' => new DateTime()
        ]);
    }
}
