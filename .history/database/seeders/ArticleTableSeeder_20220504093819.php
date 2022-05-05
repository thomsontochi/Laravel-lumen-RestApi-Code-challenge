<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;


class ArticleTableSeeder extends Seeder
{

   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory(App\<Article></Article>::class)->count(50)->create();
    }
}