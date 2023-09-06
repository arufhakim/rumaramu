<?php

use Illuminate\Database\Seeder;
use \App\Testimony;

class TestimoniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimony::create([
            'nama' => 'Example',
            'jabatan' => 'Example',
            'testimoni' => 'Example',
            'foto' => "http://lorempixel.com/400/200/sports/"
        ]);
    }
}
