<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role' => 'owner',
            'name' => 'admin',
            'email' => 'rumaramu@gmail.com',
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10)
        ]);
    }
}
