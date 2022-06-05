<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Contact::factory(5)->create();
        /*$data = [
            [
                'name' => 'Rogelio',
                'phone_number' => '8371-1944',
                'user_id' => '1'
            ],
            [
                'name' => 'Gabriel',
                'phone_number' => '8320-7827',
                'user_id' => '1'
            ],
            [
                'name' => 'Ma',
                'phone_number' => '8888-8888',
                'user_id' => '1'
            ],

        ];
        DB::table('contacts')->insert($data);
        */
    }
}
