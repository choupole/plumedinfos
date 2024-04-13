<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $page = 'Articles';
        $categories = Category::all();

        return view('admin.posts.index', compact('posts', 'page', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = 'Création';
        $categories = Category::all();

        return view('admin.posts.create', compact('page', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $page = 'Articles';

        $title = $request->input('title');
        $content = $request->input('content');
        $published_at = Carbon::now();
        $user_id = auth()->user()->id;

        $post = new Post([
            'title' => $title,
            'content' => $content,
            'published_at' => $published_at,
            'user_id' => $user_id,
        ]);

        // Enregistrer l'image dans un emplacement spécifique
        $filename = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('assets/uploads/posts/'), $filename);
        }

        $post = new post();
        $post->title = $title;
        $post->content = $content;
        $post->published_at = $published_at;
        $post->user_id = $user_id;
        $post->image = $filename;
        $post->save();
        // Récupérer l'ID du post créé
        $postId = $post->id;

        // Insérer la relation dans la table de pivot
        $categoryIds = $request->input('category_ids', []);

        foreach ($categoryIds as $categoryId) {
            DB::table('category_post')->insert([
                'category_id' => $categoryId,
                'post_id' => $postId,
            ]);
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Supprimer l'entrée dans la table de pivot
        DB::table('category_post')->where('post_id', $post->id)->delete();

        // Supprimer le post
        $post->delete();

        return redirect()->route('posts.index')
                        ->with('success', 'Le post a été supprimé avec succès.');
    }
}
