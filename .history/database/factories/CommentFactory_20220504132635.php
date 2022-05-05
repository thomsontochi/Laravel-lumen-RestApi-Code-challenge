<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;


$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->user_id,
        'address' => $faker->parent_id,
        'address' => $faker->parent_id,
        'website' => 'https://' . $faker->word . '.com',
        'email' => $faker->email,
    ];
});
