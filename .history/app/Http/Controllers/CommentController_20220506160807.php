<?php
namespace App\Http\Controllers;


use Validator;
use App\Models\Comment as ModelsComment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
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


   public function update(Request $request,$)
   {    
       $validator = Validator::make($request->all(),[
           'subject' => 'sometimes|required|string', 
           'body'  => 'sometimes|required|string', 
           
       ]);

       if ($validator->fails()) {
           return response()->json([ 'message' => $validator->errors() ]);
       }

       $ = ModelsComment::where('id',$)->first();

       if(!$){
           return response()->json(['message' => 'Comment is not found']);
       }

       try{
   
           
           
           $->update([
               'subject'                  => $request->subject ?? $->subject, 
               'body'               => $request->body ?? $->body, 
               
           ]);

           return response()->json([
               '' => new Resource($)
           ],200);
   
       }
       catch (\Exception $e){
            return response()->json([
                   'message' => $e->getMessage()
               ],200);
       }
           
        ;
   }


}