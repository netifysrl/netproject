<?php

use Faker\Generator as Faker;
use App\Role;
Use App\User;

$factory->define(App\Team::class, function (Faker $faker) {
    return [
        'name' => $faker->safeColorName,
        'description' => $faker->text($maxNbChars = 18),
        'user_id' => User::inRandomOrder()->first()->id,
        'role_id' => Role::inRandomOrder()->first()->id,
    ];
});
