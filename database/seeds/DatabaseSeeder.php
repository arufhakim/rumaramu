<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call('UsersTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('ProductsTableSeeder');
        $this->call('TestimoniesTableSeeder');
        $this->call('FaqsTableSeeder');
        $this->call('ContactsTableSeeder');
    }
}
