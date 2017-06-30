<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FrontEndController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('frontend.index')->withPosts($posts);
    }
}
