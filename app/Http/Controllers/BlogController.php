<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $blogs = \DB::table('blogs')->orderBy('id', 'desc')->get();
        return view('blogs', ['blogs' => $blogs]);
    }
    public function show(Blog $blog) {
        return view('blogs_view', ['blog' => $blog]);
    }
}
