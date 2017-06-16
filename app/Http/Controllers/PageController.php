<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function index()
    {
        $ArticleList = Post::all();
        return view('index')->with('article', $ArticleList);
    }
}
