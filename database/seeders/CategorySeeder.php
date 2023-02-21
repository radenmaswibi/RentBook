<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'comic', 'novel', 'fiction', 'history', 'drama', 'action', 
            'romance', 'sport', 'thiller', 'horror', 'comedy','slice of life'
        ];

        foreach($data as $value)
        {
            Category::insert([
                'name' => $value 
            ]);
        }
    }
}
