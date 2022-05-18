<?php


namespace App\Http\Controllers\Requests\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentRequest extends Controller
{
   public function __construct(Request $request)
   {
      $this->validate(
         $request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            
         ]
      );

      parent::__construct($request);
   }
}
