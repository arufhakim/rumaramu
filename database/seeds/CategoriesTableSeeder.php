<?php

use Illuminate\Database\Seeder;
use \App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'kategori' => 'Example',
            'gambar' => "http://lorempixel.com/400/200/sports/"
        ]);
    }
}
