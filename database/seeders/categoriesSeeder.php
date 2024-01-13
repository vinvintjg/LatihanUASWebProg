<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = Category::create([
            'id' => '1',
            'name' => 'Category 1',
        ]);

        $categories = Category::create([
            'id' => '2',
            'name' => 'Category 2',
        ]);

        $categories = Category::create([
            'id' => '3',
            'name' => 'Category 3',
        ]);
    }
}
