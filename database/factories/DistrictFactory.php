<?php

use Faker\Generator as Faker;

$factory->define(App\District::class, function (Faker $faker) {
    return [
                'district_name'=> rtrim($faker->sentence(rand(1, 3)), "."),
                       'division_id'=>  rand(1, 3),
         
    ];
});
