<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;


$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'subject' => $faker->subject,
        'body' => $faker->parent_id,
        
    ];
});
