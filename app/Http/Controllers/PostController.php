<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index',compact('posts'));
    }

    public function create()
    {
        return view('multiple_checkbox');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['category'] = $request->input('category');
        Post::create($input);
        return redirect()->route('posts.index');
    }
}
