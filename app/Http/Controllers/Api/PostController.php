<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(4);

        return PostResource::collection($posts);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return new PostResource($post);
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
