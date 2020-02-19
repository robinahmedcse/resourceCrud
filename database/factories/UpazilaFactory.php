<?php

use Faker\Generator as Faker;

$factory->define(App\Upazila::class, function (Faker $faker) {
    return [
                 'upazila_name'=> rtrim($faker->sentence(rand(1, 3)), "."),
                       'district_id'=>  rand(1, 10),
         
    ];
});
