<?php

namespace App\Http\Controllers;


use App\Models\Manager;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index ()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(2);
        $managers = Manager::orderBy('id', 'desc')->take(4)->get();
        return view('post.index', compact('posts', 'managers'));
    }

    public function show($slug)
    {
        $post = Post::query()->where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();

        return view('post.show', compact('post'));
    }

    public function allPosts()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->get();
        return view('post.all', compact('posts'));
    }

//    public function showManager()
//    {
//        $manager = Manager::all();
//    }
}
