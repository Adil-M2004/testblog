<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index()
    {
        $latestPost = Post::latest()->first(); // Fetch the latest blog post
        return view('index', compact('latestPost'));
    }
}
