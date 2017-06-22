<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function getTags(){
        $tags = Tag::all()->toArray();
        $tagsTitle = array_column($tags, 'title');
        return response()->json($tagsTitle);
    }
}
