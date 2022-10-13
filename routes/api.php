<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\MyNoteItemController;
use App\Http\Controllers\Api\MyNoteCategoryController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['guest'])
    ->namespace('App\Http\Controllers\Api')
    ->group(function () {
        Route::controller(AuthController::class)
            ->group(function () {
                Route::get('user/{id}', 'getUser');
            });

        Route::controller(AuthController::class)
            ->group(function () {
                Route::post('users/login', 'login');
            });

        Route::controller(PostController::class)
            ->group(function () {
                Route::get('posts', 'index');
                Route::get('posts/{slug}', 'show');
            });

        Route::controller(MyNoteCategoryController::class)
            ->group(function () {
                Route::get('my-note-categories', 'index');
            });

        Route::controller(MyNoteItemController::class)
            ->group(function () {
                Route::get('my-note-items', 'index');
            });
    });




























// Route::get('categories', function () {
//     return Category::latest()->get();
// });

// Route::post('categories', function (Request $request) {
//     return Category::create($request->all());
// });

// Route::patch('categories/{category}', function (Request $request, Category $category) {
//     return $category->update($request->all());
// });

// Route::delete('categories/{category}', function (Category $category) {
//     return $category->delete();
// });
