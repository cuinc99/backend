<?php

use App\Models\Post;
use App\Http\Resources\PostResource;

Route::get('/', function () {
    return PostResource::collection(Post::latest()->paginate(4));
    return auth()->check() ? auth()->user() : 'XUNNAH APP';
});