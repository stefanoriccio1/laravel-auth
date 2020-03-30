<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //utenti guest e admin
    public function index()
    {
      $posts = Post::all();

      return view ('guest.posts.index', compact('posts'));
    }
}
