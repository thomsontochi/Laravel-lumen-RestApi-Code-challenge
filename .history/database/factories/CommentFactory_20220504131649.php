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
            'user_id' => $this->faker->(50),
            'parent_id' => $this->faker->(200),
            'comment' => $this->faker->text(200),
            'commentable_id' => $this->faker->(200),
            'commentable_type' => $this->faker->(200),
        ];
    }
}
