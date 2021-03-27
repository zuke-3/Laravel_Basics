<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Postscontroller extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }
}
