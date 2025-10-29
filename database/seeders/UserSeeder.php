<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(array(
            array(
                'name' => 'Admin Zaa',
                'email' => 'admin@gmail.com',
                'phone' => '8938768',
                'nik' => '367372567',
                'gender' => 'female',
                'role' => 'admin',
                'password' => bcrypt('2345')
            ),
            array(
                'name' => 'User Zai',
                'email' => 'user@gmail.com',
                'phone' => '89375488',
                'nik' => '36767894323',
                'gender' => 'male',
                'role' => 'user',
                'password' => bcrypt('1234')
            ),
        ));
    }
}
