<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;


$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'website' => 'https://' . $faker->word . '.com',
        'email' => $faker->email,
    ];
});
