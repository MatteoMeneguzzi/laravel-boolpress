<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //GET VLOG POSTS
    public function index() {
        // $posts = Post::all();
        $posts = Post::paginate(2);

        return response()->json($posts);
    }
}
