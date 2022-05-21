<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomePageController extends Controller
{
    public function index()
    {
        $posts = Post::with('category','tags','user')->where('status',2)->take(4)->get();

        return view('blog.index', compact('posts'));
    }
}
