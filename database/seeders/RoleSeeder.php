<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'Super Admin',
                'slug' => 'super-admin',
                'description' => 'Have all privileges',
            ],
            [
                'id' => 2,
                'name' => 'Employee',
                'slug' => 'employee',
                'description' => 'Can See Own data',
            ],

        ]);
    }
}
