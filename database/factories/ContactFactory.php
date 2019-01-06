<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'mobile_phone' => $faker->phoneNumber,
        'street' => $faker->streetName,
        'number' => $faker->buildingNumber,
        'city' => $faker->city,
        'zip_code' => $faker->postcode,
        'country' => $faker->country
        //
    ];
});
