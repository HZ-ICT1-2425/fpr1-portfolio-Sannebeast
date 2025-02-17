<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Faq;
use Illuminate\View\View;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of Posts.
     */
    public function index()
    {
        return view('faq', [
            'faqs' => Faq::all()
        ]);
    }

    /**
     * shows user blogs page
     */
    public function create()
    {
        return view('faq.create');
    }

    /**
     * @param Faq $faq
     * @return void
     */
    public function delete(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        // Create a new Post model object
        $post = new Faq();
        // Copy request data (representing the form inputs) to the
        // object's properties
        $post->question = request()['question'];
        $post->answer = request()['answer'];
        $post->link = request()['link'];
        // Save the model's state to the database
        // (which means inserting a new record in this case)
        $post->save();
        // Redirect to the blogs index page
        return redirect()->route('faq');
    }

    /**
     * editing post
     */
    public function edit(Faq $faq)
    {
        return view('faq.edit');
    }

    /**
     * Shows specified blog
     */
    public function show(Faq $faq)
    {
        return view('faq', [
            'faq' => $faq
        ]);
    }
}
