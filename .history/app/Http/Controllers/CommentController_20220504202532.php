<?php
namespace App\Http\Controllers;

use App\Comment;
use App\Models\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function showOneComment($id){
    $article = Article::where('post_id', $id)->get;
    return response()->json($article);
   }
}