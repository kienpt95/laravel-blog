<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * show list of post
     * @return mixed
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('frontend.index')->withPosts($posts);
    }
    /**
     * Post read
     * @param $slug
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('frontend.post')->withPost($post);
    }

    /**
     * Create new post in admin dashboard
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store new post
     * Admin Dashboard
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $id = $request->input('id');
        //TODO: validate

        $create_new = ($id == "") ? true : false;
        if (!$create_new) {
            $post = Post::find($id);
        } else {
            $post = new Post;
        }
        $is_public = ($request->input('public') == 'on') ? true : false;

        $post->is_public = $is_public;
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->content = $request->input('content');
        $post->save();
        //TODO: save tag
        $tags = $request->input('tags');
        app('App\Http\Controllers\TagController')->updatePostTags($post->id, $tags);
        return redirect()->route('admin_post');
    }

    /**
     * Delete post by id
     * Admin Dashboard
     * @param $id
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        //TODO: return response
    }

    /**
     * Edit post
     * Admin Dashboard
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $tags = $post->tags;
        return view('admin.post.edit')->withPost($post)->withTags($tags);
    }

    /**
     * Change status public|private of post
     * Admin Dashboard
     * @param $id
     */
    public function changeStatus($id)
    {
        $post = Post::find($id);
        $post->is_public = !$post->is_public;
        $post->save();
        //TODO: return response
    }
}
