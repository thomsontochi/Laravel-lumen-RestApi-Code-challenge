<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;
use App\Models\Comment as ModelsComment;
use Symfony\Component\HttpFoundation\Response;


class CommentController extends Controller
{

    public function getComment($id){

        $comment = ModelsComment::findorFail($id);
    
        if (!$comment) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, comment not found.'
            ], 400);
        }
    
        return response()->json($comment);

    }

   public function updateComment($id, Request $request){
    //Adds a comment to the item. This updates the "Comments" field of the item.

    $this->validate($request, [
        'subject' => 'required',
        'body' => 'required'
    ]);


    $updateComment = ModelsComment::findorFail($id);

    $updateComment->update($request->all());

    return response()->json($updateComment, 200);


   }


   




   

//    public function updateComment(Request $request,Comment $comment)
//     {
//         //dd($comment);
//         //Validate data
//         $data = $request->only('subject', 'body');

//         $validator = Validator::make($data, [
//             'subject' => 'required|string',
//             'body' => 'required',
//         ]);

       
//         //Send failed response if request is not valid
//         if ($validator->fails()) {
//             return response()->json(['error' => $validator->messages()], 200);
//         }

//         //Request is valid, update comment
//         $comment = $comment->update([
//             'subject' => $request->subject,
//             'body' => $request->body,
//         ]);

//         // return $comment;

//         //comment updated, return success response
//         return response()->json([
//             'success' => true,
//             'message' => 'comment updated successfully',
//             'data' => $comment
//         ], Response::HTTP_OK);
//     }


}