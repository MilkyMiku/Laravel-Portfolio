<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = DB::table('tasks')->orderBy('id', 'desc')->get();
        return view('tasks', ['tasks' => $tasks]);
    }
    public function store(Request $request)
    {
        $task = new Task;
        $task->description = $request->description;

        $task->save();
        return redirect('/tasks');
    }
    public function edit(Task $task) {
        return view('tasks_edit', ['task' => $task]);
    }

    public function update(Task $task) {
        $task->description = request('description');
        if($task->completed_at) {
            if(!request('completed')) $task->completed_at = null;
        }
        else {
            $task->completed_at = request('completed') ? now() : null;
        }
        $task->save();
        return redirect('/tasks');  
    }
    public function delete(Task $task) {
        try {
            $task->delete();
        } catch (\Exception $e) {
            die('fuck');
        }
        return redirect('/tasks')->with("success", 'Task deleted successfully');
    }
}
