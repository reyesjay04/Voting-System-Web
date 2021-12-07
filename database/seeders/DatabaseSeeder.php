<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create();
//        $gender = $faker->randomElement(['male', 'female']);
        foreach (range(1,200) as $index) {
            DB::table('voters')->insert([
                'voters_code' => $faker->voters_code,
                'voters_name' => $faker->voters_name

//                'username' => $faker->username,
//                'phone' => $faker->phoneNumber,
//                'dob' => $faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }
    }
}
