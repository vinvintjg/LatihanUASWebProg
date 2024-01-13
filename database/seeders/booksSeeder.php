<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $books = Book::create([
            'id' => '1',
            'publisher_id' => '1',
            'title' => 'title 1',
            'author' => 'author 1',
            'year' => '2021',
            'synopsis' => 'synopsis 1',
            'image' => 'https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/attachment_78895234.png?auto=format&q=60&fit=max&w=930',
        ]);

        $books = Book::create([
            'id' => '2',
            'publisher_id' => '2',
            'title' => 'title 2',
            'author' => 'author 2',
            'year' => '2022',
            'synopsis' => 'synopsis 2',
            'image' => 'https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/attachment_78895234.png?auto=format&q=60&fit=max&w=930',
        ]);

        $books = Book::create([
            'id' => '3',
            'publisher_id' => '2',
            'title' => 'title 3',
            'author' => 'author 3',
            'year' => '2023',
            'synopsis' => 'synopsis 3',
            'image' => 'https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/attachment_78895234.png?auto=format&q=60&fit=max&w=930',
        ]);

    }
}
