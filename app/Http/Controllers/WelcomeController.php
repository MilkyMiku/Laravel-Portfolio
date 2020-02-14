<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
class WelcomeController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->orderBy('id', 'desc')->take(3)->get();
        return view('welcome', ['tasks' => $tasks]);
    }
}
