<?php

namespace App\Http\Controllers;

use App\Tag;
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
        $statistic = [
            "post_count" => Post::count(),
            "tag_count" => Tag::count(),
            "website_visits" => 75521
        ];
        return view('admin.dashboard')->withStatistic($statistic);
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
