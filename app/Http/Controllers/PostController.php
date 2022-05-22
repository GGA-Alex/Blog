<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category:id,name','tags:id,name')->where('status',2)->paginate(8);

        return view('blog.blogs.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('blog.blogs.show', compact('post'));
    }
}
