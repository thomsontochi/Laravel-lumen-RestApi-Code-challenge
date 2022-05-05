<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;
    //protected $model = \App\Models\Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'title' => $this->faker->title,
            // 'description' => $this->faker->description,
            'user_id' =>faker->user_id(),
            'parent_id' =>faker->parent_id(),
            'comment' =>faker->comment(),
            'commentable_id' =>faker->commentable_id(),
            'commentable_type' =>faker->commentable_type(),
        ];
    }
}
