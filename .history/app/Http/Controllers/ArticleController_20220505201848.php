<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showAllArticle(){
        return response()->json(Article::all());
    }
    public function showOneArticle($id){
        return response()->json(Article::find($id));
    }
    public function showOneComment(){
        $comment = Article::with
    }


}
