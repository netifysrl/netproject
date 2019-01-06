<?php

use Faker\Generator as Faker;
use App\Category;
use App\Status;
use App\Company;


$factory->define(App\Deal::class, function (Faker $faker) {

    $timedate = $faker->iso8601($max = 'now', $timezone='null', 0, -5);
    return [
        'name' => $faker->company,
        'description' => $faker->text($maxNbChars = 50),
        'cat_id' => Category::inRandomOrder()->first()->id,
        'status_id' => Status::inRandomOrder()->first()->id,
        'Company_id' => Company::inRandomOrder()->first()->id,
        'budget_amount' => $faker->numberBetween($min = 500, $max = 90000),
        'start_contact' => substr($timedate, 0, -5),
        'end_line' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 years', $timezone = null)

    ];
});
