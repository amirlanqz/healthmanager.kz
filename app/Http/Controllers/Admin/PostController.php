<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->with('category', 'tags')->orderBy('id', 'desc')->paginate();
        $basket_cnt = Post::onlyTrashed()->count();
        return view('admin.post.index', compact('posts', 'basket_cnt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->pluck('title', 'id')->all();
        $tags = Tag::query()->pluck('title', 'id')->all();
        return view('admin.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'meta_desc' => ['max:255'],
            'content' => ['required'],
            'excerpt' => ['required', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'],
            'tags' => ['exists:tags,id'],
            'thumb' => ['max:255']
        ]);

        $post = Post::query()->create($validated);
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.index')->with('success', 'Post added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::query()->findOrFail($id);
        $tags = Tag::query()->pluck('title', 'id')->all();
        $categories = Category::query()->pluck('title', 'id')->all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::query()->findOrFail($id);

        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'meta_desc' => ['max:255'],
            'content' => ['required'],
            'excerpt' => ['required', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'],
            'tags' => ['exists:tags,id'],
            'thumb' => ['max:255'],
        ]);

        $post->update($validated);
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::query()->findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Posts deleted successfully.');
    }

    public function basket()
    {
        $posts = Post::onlyTrashed()->with('category')->paginate(4);
        return view('admin.post.basket', compact('posts'));
    }

    public function basketRestore(string $id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->restore();
        return redirect()->route('admin.posts.basket')->with('success', 'Posts restore successfully.');
    }

    public function basketRemove(string $id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->tags()->detach();
        if ($post->tags()->count()) {
            return redirect()->route('admin.posts.basket')->with('error', 'There are tags for this post.');
        }
        $post->forceDelete();
        return redirect()->route('admin.posts.basket')->with('success', 'Posts deleted successfully.');
    }
}
