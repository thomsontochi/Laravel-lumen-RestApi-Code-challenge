<?php
namespace App\Http\Controllers;

use App\Comment;
use App\Models\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function showOneComment($id){
   // $article = Article::with('article_id', $id);
    $article = Art::with('blogcomments')->find($id);
    return response()->json($article);
   }
}