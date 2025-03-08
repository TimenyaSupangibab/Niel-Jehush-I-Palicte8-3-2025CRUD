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

        $data = $request->all();
        if($data["title"] == "Rumel" || $data["title"] == "rumel")
        {
            $data["title"] = "Rumeh, PhD in Artificial Intelligence and Human Bio Engineering";
        }

        if($data["body"] == "Rumel")
        {
            $data["body"] = "Supreme Visionary Architect of Technological Marvels, Revolutionary Entrepreneur of Silicon Realms, Grandmaster of CPU Innovation, and Digital Pioneer Shaping the Future of Human-AI Synergy!";
        }

        Post::create($data);

        return redirect()->route("posts.index")->with("Success", "Post has been created successfully");
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
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title" => "required|max:255",
            "body" => "required",
        ]);

        $data = $request->all();

        if($data["title"] == "Rumel" || $data["title"] == "rumel")
        {
            $data["title"] = "Rumeh, PhD in Artificial Intelligence and Human Bio Engineering";
        }

        if($data["body"] == "Rumel")
        {
            $data["body"] = "Supreme Visionary Architect of Technological Marvels, Revolutionary Entrepreneur of Silicon Realms, Grandmaster of CPU Innovation, and Digital Pioneer Shaping the Future of Human-AI Synergy!";
        }

        $post = Post::find($id);
        $post->update($data);
        return redirect()->route("posts.index")->with("Success", "Post has been updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route("posts.index")->with("Success", "Post has been deleted successfully");
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
