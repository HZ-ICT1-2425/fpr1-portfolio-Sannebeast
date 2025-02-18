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
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'link' => 'nullable|url',
        ]);

        Faq::create($request->only(['question', 'answer', 'link']));

        return redirect()->route('faq');
    }

    /**
     * editing post
     */
    public function edit(Faq $faq)
    {
        return view('faq.edit', compact('faq'));
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
