<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showAllArticle(){
        dd('hi')
        return response()->json(Article::all());
    }
}
