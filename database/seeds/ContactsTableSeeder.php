<?php

use Illuminate\Database\Seeder;
use \App\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'kontak' => 'WhatsApp',
            'nama' => '08123215912'
        ]);

        Contact::create([
            'kontak' => 'Instagram',
            'nama' => 'rumaramusouvenir'
        ]);

        Contact::create([
            'kontak' => 'Facebook',
            'nama' => 'rumaramusouvenir'
        ]);

        Contact::create([
            'kontak' => 'Email',
            'nama' => 'rumaramumalang'
        ]);
    }
}
