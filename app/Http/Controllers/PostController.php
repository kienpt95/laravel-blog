<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        $is_public = false;
        if ($request->input('public') == 'on') {
            $is_public = true;
        }
        $title = $request->input('title');
        $slug = $request->input('slug');
        $content = $request->input('content');
        $tags = $request->input('tags');

        //TODO: validate

        $post = new Post;
        $post->is_public = $is_public;
        $post->title = $title;
        $post->slug = $slug;
        $post->content = $content;
        $post->save();
        return redirect()->route('admin_post');
        //TODO: save tag
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        //TODO: return response
    }

    public function edit()
    {
        return view('admin.post.edit');
    }

    public function update()
    {

    }
    public function changeStatus($id)
    {
        $post = Post::find($id);
        $post->is_public = !$post->is_public;
        $post->save();
        //TODO: return response
    }
}
