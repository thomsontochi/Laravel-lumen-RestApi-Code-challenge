<?php
space App\Http\Controllers;

use Validator;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;
use App\Models\Comment as ModelsComment;


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


   public function updateComment(Request $request,$id)
   {    
    $this->validate($request, [
               'subject' => 'required',
                'body' => 'required'
        ]);

       if ($validator->fails()) {
           return response()->json([ 'message' => $validator->errors() ]);
       }

       $id = ModelsComment::where('id',$id)->first();

       if(!$id){
           return response()->json(['message' => 'Comment is not found']);
       }

       try{
   
           $id->update([
               'subject'  => $request->subject ?? $id->subject, 
               'body'   => $request->body ?? $id->body, 
               
           ]);

           return response()->json([
               'id' => new CommentResource($id)
           ],200);
   
       }
       catch (\Exception $e){
            return response()->json([
                   'message' => $e->getMessage()
               ],200);
       }
           
        
   }




   public function update(Request $request, Comment $comment)
   {
        $input = $request->all();
        $validator = Validator::make($input, [
        '' => 'required',
        'detail' => 'required'
        ]);
        if($validator->fails()){
        return $this->sendError('Validation Error.', $validator->errors());       
        }
        $comment-> = $input[''];
        $comment->detail = $input['detail'];
        $comment->save();
        return response()->json([
        "success" => true,
        "message" => "comment updated successfully.",
        "data" => $comment
        ]);
   }


}