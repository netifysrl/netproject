<?php

use Faker\Generator as Faker;
use App\Contact;
use App\User;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'business_name' => $faker->company,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'street' => $faker->streetName,
        'number' => $faker->buildingNumber,
        'city' => $faker->city,
        'zip_code' => $faker->postcode,
        'country' => $faker->country,
        'comm_contact_id' => Contact::inRandomOrder()->first()->id,
        'tech_contact_id' => Contact::inRandomOrder()->first()->id,
        'exec_contact_id' => Contact::inRandomOrder()->first()->id,
        'amm_contact_id' => Contact::inRandomOrder()->first()->id,
        'ref_user_id' => User::inRandomOrder()->first()->id


    ];
});
