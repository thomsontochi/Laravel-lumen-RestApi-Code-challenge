<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Comment::factory()->count(50)->create();
        factory(App\Comment::class, 10)->create()->each(function ($company) {
            $company->contacts()->save(factory(App\<i class="fa fa-comment" aria-hidden="true"></i>::class)->make());
        });
    }
}
