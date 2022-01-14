<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'image' => 'default.png',
                'role_id' => 1,
                'password' => Hash::make('12345678'),
            ],
            [
                'id' => 2,
                'name' => 'Employee',
                'email' => 'employee@gmail.com',
                'image' => 'default.png',
                'role_id' => 2,
                'password' => Hash::make('12345678'),
            ],


        ]);
    }
}
