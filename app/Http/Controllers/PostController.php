<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("posts.index", compact("posts"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|max:255",
            "body" => "required",
        ]);

        Post::create($request->all());

        return redirect()->route("posts.index")->with("success", "Post has been created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view("posts.show", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            "title" => "required|max:255",
            "body" => "required",
        ]);
        
        $post->update($request->all());
        return redirect()->route("posts.index")->with("success", "Post has been updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
    
        if (!$post) {
            return redirect()->route('posts.index')->with('error', 'Post not found.');
        }
    
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post has been deleted successfully.');
    }

    public function deleteAll()
    {
        Post::truncate(); // Deletes all posts
        return redirect()->route('posts.index')->with('success', 'All posts have been deleted successfully.');
    }

    public function create()
    {
        return view("posts.create");
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view("posts.edit", compact("post"));
    }
}
