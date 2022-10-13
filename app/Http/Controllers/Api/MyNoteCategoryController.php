<?php

namespace App\Http\Controllers\Api;

use App\Models\MyNoteCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyNoteCategoryController extends Controller
{
    public function index()
    {
        $data = MyNoteCategory::latest()->paginate(2);

        return MyNoteCategoryResource::collection($data);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(MyNoteCategory $myNoteCategory)
    {
        //
    }

    public function update(Request $request, MyNoteCategory $myNoteCategory)
    {
        //
    }

    public function destroy(MyNoteCategory $myNoteCategory)
    {
        //
    }
}
