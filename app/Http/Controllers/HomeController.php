<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function testMethod()
    {
        return view('blog.test-view');
    }
    public function aboutMethod()
    {
        return view('blog.about');
    }
    public function contactMethod()
    {
        return view('blog.contact');
    }
    public function authorMethod()
    {
        return view('blog.authors');
    }
}
