<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Faq;
use Illuminate\View\View;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of Posts.
     */
    public function index()
    {
        return view('blogs.index', [
           'blogs' => Blog::all() ?? []
        ]);
    }

    /**
     * shows user blogs page
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Updates blog
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $blog->update($validated);
        return redirect()->route('blogs');
    }

    /**
     * deletes blog post
     */
    public function delete(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs');
    }
    public function store()
    {
        // Create a new Post model object
        $post = new Blog();
        // Copy request data (representing the form inputs) to the
        // object's properties
        $post->title = request()['title'];
        $post->slug = request()['slug'];
        $post->body = request()['body'];
        // Save the model's state to the database
        // (which means inserting a new record in this case)
        $post->save();
        // Redirect to the blogs index page
        return redirect()->route('blogs');
    }

    /**
     * editing blog
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', [
            'blog' => $blog
        ]);
    }

    /**
     * Shows specified blog
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }
}
