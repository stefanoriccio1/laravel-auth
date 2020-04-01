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
        'name' =>'required|max:80',
        'email' => 'required|email',
        'post_id' => 'required|numeric|exists:posts'

      ];
    }

    public function store(Request $request)
    {
      $request->validate($this->validateRules);
      $data = $request->all();
    }
}
