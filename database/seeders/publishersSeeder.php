<?php

namespace Database\Seeders;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class publishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $publishers = Publisher::create([
            'id' => '1',
            'name' => 'name 11',
            'address' => 'address 11',
            'phone' => '01',
            'email' => 'email11@gmail.com',
            'image' => 'image11.png',
        ]);

        $publishers = Publisher::create([
            'id' => '2',
            'name' => 'name 22',
            'address' => 'address 22',
            'phone' => '01',
            'email' => 'email22@gmail.com',
            'image' => 'image22.png',
        ]);
    }
}
