<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * shows user blog page
     */
    public function blogs():View
    {
        return view('/blogs');
    }
    /**
     * which blog post
     */
    public function show($slug):View
    {
        $viewPath = 'blog.' . $slug;

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }
        abort(404);
    }
}
