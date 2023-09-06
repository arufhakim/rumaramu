<?php

use Illuminate\Database\Seeder;
use \App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nama' => 'Example',
            'categories_id' => 1,
            'harga' => 0,
            'deskripsi' => 'Example',
            'gambar' => "http://lorempixel.com/400/200/sports/"
        ]);
    }
}
