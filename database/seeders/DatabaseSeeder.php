<?php

use App\Models\Award;
use App\Models\LeaveType;
use App\Models\Noticeboard;
use App\Models\Setting;
use App\Models\Admin;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \Eloquent::unguard();



        $this->call(\Database\Seeders\AdminSeeder::class);
        $this->command->info('Admin table seeded!');

        if(env('APP_ENV') == 'local' || env('APP_ENV') == 'demo'){
            $this->call(\Database\Seeders\DepartmemntSeeder::class);
            $this->command->info('Department table seeded!');
            $this->command->info('Designation  table also seeded!');

            $this->call(\Database\Seeders\EmployeeSeeder::class);
            $this->command->info('Employees table seeded!');

            $this->call(\Database\Seeders\NoticeBoardSeeder::class);
            $this->command->info('Notice Board seeded');
        }

        $this->call(\Database\Seeders\LeaveTypeSeeder::class);
        $this->command->info('LeaveType table seeded!');

        $this->call(\Database\Seeders\SettingSeeder::class);
        $this->command->info('Setting table seeded!');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }

}
