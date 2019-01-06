<?php

use Faker\Generator as Faker;
use App\Team;
use App\Category;
use App\Company;
use App\Status;
use App\Timeline;

$factory->define(App\Project::class, function (Faker $faker) {
    $timedatestart= $faker->iso8601($max = 'now', $timezone='null', 0, -5);
    return [
        'name' => $faker->text($maxNbChars = 15),
        'description' => $faker->text($maxNbChars = 50),
        'status_id' => Status::inRandomOrder()->first()->id,
        'team_id'=> Team::inRandomOrder()->first()->id,
        'cat_id' => Category::inRandomOrder()->first()->id,
        'company_id' => Company::inRandomOrder()->first()->id,
        'timeline_id' => Timeline::inRandomOrder()->first()->id,
        'start_at' => substr($timedatestart, 0, -5),
        'end_at' => $faker->dateTimeBetween($timedatestart = 'now', $endDate = '+2 years', $timezone = null)


    ];
});
