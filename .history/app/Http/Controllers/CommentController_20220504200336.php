<?php
namespace App\Http\Controllers;

use App\Comment;
use App\Models\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function showOneComment($id){
    $article = Article::with('blogcomments')->find($id);
    return view('posts.show')->with('blogcomments', $article->blogcomments);
   }
}