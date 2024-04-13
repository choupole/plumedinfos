<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function articles()
    {
        $posts = Post::latest()->limit(5)->get();
        $categories = Category::all();

        return view('user.pages.index', compact('posts', 'categories'));
    }

    public function post(Post $post)
    {
        return view('user.pages.post');
    }
    /*
     * Display a listing of the resource.
     */
}
