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


    //Validate data
    $data = $request->only('subject', 'body');
    $validator = Validator::make($data, [
                    "subject" => 'required|sometimes',
                    "body" => 'required|sometimes',
    ]);
     //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

    

    $updateComment = ModelsComment::findorFail($id);

    $updateComment->update($request->all());

    return response()->json([
        'success' => true,
        'message' => 'comment updated successfully',
        'data' =>  $updateComment,
    ],Response::HTTP_OK);


   }


//    public function updateComment(Request $request,$id)
//     {
       
//         //Validate data
//         $data = $request->only('subject', 'body');

//         //$comment = ModelsComment::findorFail($id);

//         $validator = Validator::make($data, [
//             "subject" => 'required|sometimes',
//             "body" => 'required|sometimes',
//         ]);

       
//         //Send failed response if request is not valid
//         if ($validator->fails()) {
//             return response()->json(['error' => $validator->messages()], 200);
//         }

//         //Request is valid, update comment
//         // $comment = $comment->update([
//         //     'subject' => $request->subject,
//         //     'body' => $request->body,
//         // ]);

//         $id->update($request->all());

//         dd($id);

//         //comment updated, return success response
//         return response()->json([
//             'success' => true,
//             'message' => 'comment updated successfully',
//             'data' => $id
//         ], Response::HTTP_OK);
//     }


}