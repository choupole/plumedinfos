<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function articles()
    {
        $posts = Post::latest()->limit(6)->get();
        $recentsPosts = Post::latest()->get();
        $categories = Category::all();
        $posts = Post::all();
        $randomPosts = $posts->random(6);

        return view('user.pages.index', compact('posts', 'categories', 'randomPosts', 'recentsPosts'));
    }

    public function post($id)
    {
        $post = Post::find($id);

        $posts = Post::all();
        $randomPosts = $posts->random(6);

        return view('user.pages.post', compact('post', 'randomPosts'));
    }

    public function recentsPosts()
    {
        $recentsPosts = Post::latest()->get();
        $posts = Post::all();
        $randomPosts = $posts->random(6);
        $categories = Category::all();

        return view('user.pages.recentsPosts', compact('recentsPosts', 'randomPosts', 'categories'));
    }

    public function postsByCategories($id)
    {
        $category = Category::findOrFail($id);

        $postsByCategories = Post::whereHas('categories', function ($query) use ($category) {
            $query->where('categories.id', $category->id);
        })->get();

        $posts = Post::all();
        $randomPosts = $posts->random(6);
        $categories = Category::all();

        return view('user.pages.postsByCategories', compact('postsByCategories', 'randomPosts', 'categories'));
    }
    /*
     * Display a listing of the resource.
     */
}
