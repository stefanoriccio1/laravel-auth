<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //utenti guest e admin
    public function index()
    {
      $posts = Post::all();
      return view ('guest.posts.index', compact('posts'));
    }
}
