<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;

class StaticContentController extends Controller
{
    /**
     * shows user home page
     */
    public function home():View
    {
        return view('/welcome');
    }
    /**
     * shows user profile page
     */
    public function profile():View
    {
        return view('/profile');
    }
    /**
     * shows user dashboard page
     */
    public function dashboard():View
    {
        return view('/dashboard');
    }
    /**
     *  shows user FAQ page
     */
    public function faq():View
    {
        return view('/faq');
    }
}
