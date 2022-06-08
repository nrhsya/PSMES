<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class EvaluationMarkSeeders extends Seeder
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
        foreach(range(1,20) as $value) //range 1,10 means that there are 5 datas
        {
            DB::table('evaluation_marks') -> insert([
                //'eva_id' => $faker->randomDigitNotNull,
                'mark_id' => $faker->randomDigitNotNull,
                'std_id' => $faker->randomElement(['CB19XXX','CA19XXX','CD19XXX']),
                'std_name' => $faker->name,
                'sv_name' => $faker->name,
                'eva_name' => $faker->name,
                'eva_mark' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100.00),
                'eva_comment' => $faker->randomElement(['Good Progress','Perfect flow of explanation ','Able to show the progress well','Creative way of presentation and beatiful prototype'])
            ]);
        }
    }
}
