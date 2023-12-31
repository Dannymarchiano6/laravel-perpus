<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Bookshelf::insert([
            [
                'id' => '1',
                'code' => '620', 'name' => 'Engineering',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'code' => '621',
                'name' => 'Mechanical',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'code' => '622',
                'name' => 'Topoographical',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
