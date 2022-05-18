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

//    public function updateComment($id, Request $request){
//     //Adds a comment to the item. This updates the "Comments" field of the item.

//     $this->validate($request, [
//         'subject' => 'required',
//         'body' => 'required'
//     ]);


//     $updateComment = ModelsComment::findorFail($id);

//     $updateComment->update($request->all());

//     return response()->json($updateComment, 200);


//    }


//    public function updateComment(Request $request,$id)
//    {    
//     $this->validate($request, [
//                'subject' => 'required',
//                 'body' => 'required'
//         ]);

//        if ($validator->fails()) {
//            return response()->json([ 'message' => $validator->errors() ]);
//        }

//        $id = ModelsComment::where('id',$id)->first();

//        if(!$id){
//            return response()->json(['message' => 'Comment is not found']);
//        }

//        try{
   
//            $id->update([
//                'subject'  => $request->subject ?? $id->subject, 
//                'body'   => $request->body ?? $id->body, 
               
//            ]);

//            return response()->json([
//                'id' => new CommentResource($id)
//            ],200);
   
//        }
//        catch (\Exception $e){
//             return response()->json([
//                    'message' => $e->getMessage()
//                ],200);
//        }
           
        
//    }




//    public function updateComment($id)
//    {
//        // $input = $request->all();

//         $input = ModelsComment::where('id',$id)->first();

       
//         //     $validator = Validator::make($input, [
//         //         'subject' => 'sometimes|required',
//         //         'body' => 'sometimes|required'
//         //     ]);
//         // if($validator->fails()){
//         //     return response($validator->errors());       
//         // }
//         $id->subject = $input['subject'];
//         $id->body = $input['body'];
//         $id->save();
//         return response()->json([
//             "success" => true,
//             "message" => "comment updated successfully.",
//             "data" => $id
//         ]);
//    }

   public function updateComment(Request $request, Comment $comment)
    {
        //Validate data
        $data = $request->only('subject', 'body');

        $validator = Validator::make($data, [
            'subject' => 'required|string',
            'body' => 'required',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, update comment
        $comment = $comment->update([
            'subject' => $request->subject,
            'body' => $request->body,
            
        ]);

        //comment updated, return success response
        return response()->json([
            'success' => true,
            'message' => 'comment updated successfully',
            'data' => $comment
        ], Response::HTTP_OK);
    }


}