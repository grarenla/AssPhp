<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arr = [];
        for ($i = 0; $i < 10; $i++) {
            array_push($arr, [
                'name' => str_random(10),
                'rollNumber' => str_random(10),
                'birthday' => '2010/11/11',
                'phone' => random_int(1000000, 9999999),
                'email' => str_random('10'),
                'address' => str_random('10'),
                'gender' => random_int(0, 2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => 1
            ]);
        }
        DB::table('students')->insert($arr);
    }
}
