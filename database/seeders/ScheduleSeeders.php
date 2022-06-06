<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class ScheduleSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //function to generate random data
        $faker = Faker::create();
        foreach(range(1,30) as $value) //range 1,10 means that there are 5 datas
        {
            DB::table('schedules') -> insert([
                //'eva_id' => $faker->randomDigitNotNull,
                //'mark_id' => $faker->randomDigitNotNull,
                'std_id' => $faker->randomElement(['CB19XXX','CA19XXX','CD19XXX']),
                'std_name' => $faker->name,
                'eva_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'attendance_status' => $faker->randomElement(['WAITING FOR CONFIRMATION','CONFIRMED']),
            ]);
        }
    }
}
