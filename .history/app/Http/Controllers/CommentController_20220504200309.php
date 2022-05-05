<?php
namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function showOneComment($id){
    $post = Post::with('blogcomments')->find($id);
    return view('posts.show')->with('blogcomments', $post->blogcomments);
   }
}