<?php

namespace Database\Seeders;
use App\Models\BookCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class booksCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $book_categories = BookCategory::create([
            'id' => '1',
            'book_id' => '1',
            'category_id' => '1',
        ]);

        $book_category = BookCategory::create([
            'id' => '2',
            'book_id' => '2',
            'category_id' => '1',
        ]);

        $book_category = BookCategory::create([
            'id' => '3',
            'book_id' => '2',
            'category_id' => '2',
        ]);

        $book_category = BookCategory::create([
            'id' => '4',
            'book_id' => '2',
            'category_id' => '3',
        ]);

        $book_category = BookCategory::create([
            'id' => '5',
            'book_id' => '3',
            'category_id' => '3',
        ]);
    }
}

