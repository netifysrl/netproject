<?php

use Faker\Generator as Faker;

$factory->define(App\Timeline::class, function (Faker $faker) {
    $timedatestart= $faker->iso8601($max = 'now', $timezone='null', 0, -5);
    return [
        'name' => $faker->text($maxNbChars = 8),
        'description' => $faker->text($maxNbChars = 25),

    ];
});
