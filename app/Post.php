<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
      'userd_id',
      'title',
      'body',
      'slug',
      'updated_at'
    ];
}
