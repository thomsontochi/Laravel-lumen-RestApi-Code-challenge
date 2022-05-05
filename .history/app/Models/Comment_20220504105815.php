<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'user_id', 'parent_id', 'comment','commentable_id','commentable_type'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        
    ];
}