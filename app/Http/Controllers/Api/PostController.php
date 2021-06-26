<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //GET BLOG POSTS
    public function index() {
        // $posts = Post::all();
        $posts = Post::paginate(2);

        return response()->json($posts);
    }

    // GET POST DETAIL BY SLUG
    public function show($slug) {
        // dump($slug);

        $post = Post::where('slug', $slug)->with(['category', 'tags'])->first();

        return response()->json($post);
    }
}
