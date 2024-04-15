<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $page = 'categorie';

        return view('admin.categories.index', compact('categories', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = 'categorie';

        return view('admin.categories.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $category = Category::create($validatedData);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);

        $postsByCategories = Post::whereHas('categories', function ($query) use ($category) {
            $query->where('categories.id', $category->id);
        })->get();

        $categories = Category::all();

        return view('admin.categories.show', compact('postsByCategories', 'category', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
    }
}
