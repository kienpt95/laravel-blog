<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    /**
     * get json tag data
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTags()
    {
        $tags = Tag::all()->toArray();
        $tagsTitle = array_column($tags, 'title');
        return response()->json($tagsTitle);
    }

    /**
     * update post tag
     * @param integer $postId
     * @param array $newTags
     */
    public function updatePostTags($postId, $newTags)
    {
        $newTags = is_null($newTags) ? [] : $newTags;
        $oldTags = [];
        $tags = Post::find($postId)->tags;
        foreach ($tags as $tag) {
            $item = [$tag->id => $tag->title];
            $oldTags += $item;
        };

        $delTags = array_diff($oldTags, $newTags);
        $this->deletePostTag($delTags, $postId);

        $addTags = array_diff($newTags, $oldTags);
        $this->addPostTag($addTags, $postId);
    }

    /**
     * remove post tag foreign in post_tag table
     * @param $delTags
     * @param $postId
     */
    public function deletePostTag($delTags, $postId)
    {
        foreach ($delTags as $tag) {
            DB::table('post_tag')
                ->where('post_id', $postId)
                ->where('tag_id', Tag::where('title', $tag)->first()->id)
                ->delete();
        }
    }

    /**
     * @param $addTags
     * @param $postId
     */
    public function addPostTag($addTags, $postId)
    {
        foreach ($addTags as $tag_to_add) {
            $tag = Tag::where('title', $tag_to_add)->first();
            if (is_null($tag)) {
                $tag = Tag::create($tag_to_add);
            }
            DB::table('post_tag')->insert([
                "post_id" => $postId,
                "tag_id" => $tag->id
            ]);
        }
    }
}
