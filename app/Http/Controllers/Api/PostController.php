<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Display a listing of the posts.
     *
     * @return PostCollection
     */
    public function index()
    {
        $posts = Post::all();
        return new PostCollection($posts);
    }

    /**
     * Display the specified post.
     *
     * @param Request $request
     * @param Post $post
     * @return PostResource
     */
    public function show(Request $request, Post $post)
    {
        return new PostResource($post);
    }

}
