<?php
namespace App\Http\Controllers;

use App\Comment;
use App\Models\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function showOneComment($id){
    $post = Article::with('blogcomments')->find($id);
    return view('posts.show')->with('blogcomments', $post->blogcomments);
   }
}