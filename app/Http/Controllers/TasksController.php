<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();

        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        Task::create(request()->all());

        return redirect('/tasks');
    }

    public function edit(Task $task)
    {
        return view('tasks.editing', compact('task'));
    }

    public function update($task)
    {
        Task::where('id', $task)->update([
            'title'=>request('title'),
            'shortDescription'=>request('shortDescription'),
            'body'=>request('body'),
        ]);

        return redirect('/tasks/'.$task);
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }
}
