<?php

namespace Database\Seeders;

use App\Models\author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat sample penulis
        $author1 = author::create(['name' => 'Aam Amirudin']);
        $author2 = author::create(['name' => 'Salim A Fillah']);
        $author3 = author::create(['name' => 'M Fauzil Adhim']);

        //membuat sample buku
        $book1 = Book::create(['title' => 'Kupinang kau dengan basmalah', 'amount' => 3,
            'author_id' => $author1->id]);
        $book2 = Book::create(['title' => 'Jalan Para Pejuang', 'amount' => 2,
            'author_id' => $author2->id]);
        $book3 = Book::create(['title' => 'Seminggu Belajar Laravel', 'amount' => 3,
            'author_id' => $author3->id]);
        $book3 = Book::create(['title' => 'Menyelami Buku Laravel', 'amount' => 4,
            'author_id' => $author3->id]);

    }
}
