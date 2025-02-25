<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Faq;
use Illuminate\View\View;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of faqs.
     */
    public function index()
    {
        return view('faq', [
            'faqs' => Faq::all()
        ]);
    }

    /**
     * shows user faq page
     */
    public function create()
    {
        return view('faq.create');
    }

    /**
     * Updates faq
     */
    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq->update($validated);
        return redirect()->route('faq');
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
     * editing faq
     */
    public function edit(Faq $faq)
    {
        return view('faq.edit', [
            'faq' => $faq
        ]);
    }

    /**
     * Shows specified faq
     */
    public function show(Faq $faq)
    {
        return view('faq', [
            'faq' => $faq
        ]);
    }
}
