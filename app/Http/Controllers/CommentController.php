<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;


use Illuminate\Http\Request;

class CommentController extends Controller
{
    private $validateRules;

    public function __construct(){


      $this->validateRules =[
        'title'=> 'required|string',
        'body'=> 'required|string|max:150',
        'name' =>'required|string|max:80',
        'email' => 'required|email',
        'post_id' => 'required|numeric|exists:App\Post,id'

      ];
    }

    public function store(Request $request)
    {
      // dd($request->all());
      $request->validate($this->validateRules);
      $data = $request->all();

      $comment = new Comment;
      $comment->fill($data);
      $saved = $comment->save();

      if(!$saved){
        return redirect()->back();
      }

      return redirect()->route('posts.show', $comment->post->slug);
    }
}
