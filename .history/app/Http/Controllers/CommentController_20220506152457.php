<?php
namespace App\Http\Controllers;

use Validator;
use App\Comment;
use App\Models\Article;
use App\Models\Comment as ModelsComment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
   public function updateComment($id, Request $request){
    //Adds a comment to the item. This updates the "Comments" field of the item.

    $validator = Validator::make($request->all(), [
        'subject' => 'required|unique:posts|max:255',
        'body' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json()
                    ->withErrors($validator)
                    ->withInput();
    }

    $updateComment = ModelsComment::findorFail($id);

    $updateComment->update($request->all());

    return response()->json($updateComment, 200);


   }


}