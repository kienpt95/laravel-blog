<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BackEndController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkAdmin');
    }

    /**
     * dashboard
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Post manager
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function post()
    {
        $posts = Post::paginate(10);
        return view('admin.post')->withPosts($posts);
    }
}
