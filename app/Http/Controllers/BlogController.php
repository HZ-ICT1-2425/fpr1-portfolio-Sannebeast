<?php

namespace App\Http\Controllers;
use App\Models\Blog;
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
     * Shows specified blog
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }
}
