<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = new \App\Author;
        $author1->firstName = "Rudwig";
        $author1->lastName = "Rudiger";
        $author1->save();

        $author2 = new \App\Author;
        $author2->firstName = "Hermann";
        $author2->lastName = "Mann";
        $author2->save();

        $author3 = new \App\Author;
        $author3->firstName = "Matze";
        $author3->lastName = "Knoop";
        $author3->save();
    }
}
