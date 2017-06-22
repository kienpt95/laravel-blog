<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function create()
    {
        return view('admin.post.create');
    }

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

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        //TODO: return response
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $tags = $post->tags;
        return view('admin.post.edit')->withPost($post)->withTags($tags);
    }

    public function changeStatus($id)
    {
        $post = Post::find($id);
        $post->is_public = !$post->is_public;
        $post->save();
        //TODO: return response
    }
}
