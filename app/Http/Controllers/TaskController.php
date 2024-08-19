<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //Show all tasks
    public function index () {
        $tasks = Task::all();
        // dd($tasks);
        return view('task.index', compact('tasks'));
    }

    public function show (Task $task) {
        return view('task.show', compact('task'));
    }

    //Show a form with fields to submit
    public function create() {
        return view('task.create');
    }

    //Retrieve all data and put them in database
    public function store(Request $request) {
        // dd($request);
        $request->validate([
            "title" => "required",
            "description" => "required"
        ]);

        Task::create([
            "title" => $request->title,
            "description" => $request->description,
            "realise" => 0
        ]);
        return redirect()->route('task.index');
    }

    //Show a form to change an existing task
    public function edit (Task $task) {
        return view('task.edit', compact('task'));
    }

    //Retrieve all data from form and store them in database
    public function update (Request $request, Task $task) {
        // dd($request);
        $request->validate([
            "title" => "required",
            "description" => "required"
        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('task.index');
    }

    //Suppress a task from database
    public function destroy (Task $task) {
        $task->delete();
        return redirect()->route('task.index');
    }

}
