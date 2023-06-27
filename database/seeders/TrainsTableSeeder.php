<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            Train::create([
                "brand" => $faker->company(),
                "departure_station" => $faker->city(),
                "arrival_station" => $faker->city(),
                "departure_time" => $faker->dateTimeThisMonth(),
                "arrival_time" => $faker->dateTimeThisMonth(),
                "train_code" => $faker->randomNumber(5, false),
                "carriages" => rand(5, 15),
                "in_time" => $faker->boolean(),
                "canceled" => $faker->boolean()
            ]);
        }
    }
}