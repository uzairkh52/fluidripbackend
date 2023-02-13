<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WebUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('web_users')->insert([
            'first_name' => 'uzair',
            'last_name' => 'uzair',
            'email' => 'uzairkh52@gmail.com',
            'phone' => '121212',
            'password' => Hash::make('121212')
        ]);
    }
}