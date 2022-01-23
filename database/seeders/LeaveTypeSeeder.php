<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LeaveType;
use Faker;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('leavetypes')->truncate(); // deleting old records.
        $faker = Faker\Factory::create();


        LeaveType::create([

            'leaveType'    =>  'sick',
            'num_of_leave'    =>  5
        ]);

        LeaveType::create([
            'leaveType'    =>  'casual',
            'num_of_leave'    =>  5
        ]);

        LeaveType::create([
            'leaveType'    =>  'half day',
            'num_of_leave'    =>  5
        ]);

        LeaveType::create([

            'leaveType'    =>  'maternity',
            'num_of_leave'    =>  0
        ]);
        LeaveType::create([
            'leaveType'    =>  'unpaid',
            'num_of_leave'    =>  0
        ]);
        LeaveType::create([
            'leaveType'    =>  'others',
            'num_of_leave'    =>  0
        ]);
    }
}
