<?php
namespace App\Http\Controllers;



use App\Models\Comment as ModelsComment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
   public function updateComment($id, Request $request){
    //Adds a comment to the item. This updates the "Comments" field of the item.

    $this->validate($request, [
        'subject' => 'required',
        'email' => 'required|email|unique:users'
    ]);

    if ($validator->fails()) {
        return response()->json('validation failed');
                    // ->withErrors($validator)
                    // ->withInput();
    }

    $updateComment = ModelsComment::findorFail($id);

    $updateComment->update($request->all());

    return response()->json($updateComment, 200);


   }


}