<?php

use Illuminate\Database\Seeder;
use \App\Faq;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'pertanyaan' => 'Example',
            'jawaban' => 'Example'
        ]);
    }
}
