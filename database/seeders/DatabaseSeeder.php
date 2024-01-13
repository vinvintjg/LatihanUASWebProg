<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookCategory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // contoh data manual seeder
        $this->call(categoriesSeeder::class);
        $this->call(publishersSeeder::class);
        $this->call(booksSeeder::class);
        // $this->call(booksCategorySeeder::class);
        
        // contoh data fake factory
        \App\Models\BookCategory::factory(10)->create();
        
        
    }
}
