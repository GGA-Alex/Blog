<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category','tags','user')->where('status',2)->take(4)->get();

        return view('blog.index', compact('posts'));
    }
}
