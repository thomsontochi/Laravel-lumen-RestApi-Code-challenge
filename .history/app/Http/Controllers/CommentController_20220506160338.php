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


   public function update(Request $request,$client)
   {    
       $validator = Validator::make($request->all(),[
           'subject' => 'sometimes|required|string', 
           'body'  => 'sometimes|required|string', 
           
       ]);

       if ($validator->fails()) {
           return response()->json([ 'message' => $validator->errors() ]);
       }

       $client = ModelsComment::where('id',$client)->first();

       if(!$client){
           return response()->json(['message' => 'Comment is not found']);
       }

       try{
   
           
           
           $client->update([
               'subject'                  => $request->name ?? $client->name, 
               'website'               => $request->website ?? $client->website, 
               
           ]);

           return response()->json([
               'client' => new ClientResource($client)
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