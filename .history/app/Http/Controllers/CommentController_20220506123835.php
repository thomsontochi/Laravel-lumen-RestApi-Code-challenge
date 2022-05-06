<?php
namespace App\Http\Controllers;

use App\Comment;
use App\Models\Article;
use App\Models\Comment as ModelsComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function updateComment($id, Request $request){
    //Adds a comment to the item. This updates the "Comments" field of the item.

    $comment = ModelsComment::findorFail($id);

    $updateComment->update($request->all());

    return response()->json($comment);


   }


}