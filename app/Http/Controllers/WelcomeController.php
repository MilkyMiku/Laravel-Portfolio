<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
class WelcomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tasks = DB::table('tasks')->orderBy('id', 'desc')->take(3)->get();
        return view('welcome', ['tasks' => $tasks]);
    }
}
