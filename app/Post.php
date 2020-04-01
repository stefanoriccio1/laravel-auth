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

    public function user(){

      return $this->belongsTo('App\User');
    }

    public function comments(){

      return $this->hasMany('App\Comment');
    }

    public function tags(){

      return $this->belongToMany('App\Tag');
    }
}
