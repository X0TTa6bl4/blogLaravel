<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Tag;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:update,task')->except(['index', 'store', 'create']);
    }

    public function index()
    {
        $tasks =  auth()->user()->tasks()->with('tags')->latest()->get();

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
        $attributes = request()->validate([
            'title'=>'required',
            'shortDescription'=>'required',
            'body'=>'required',
    ]);

        $attributes['owner_id'] = auth()->id();

        Task::create($attributes);

        return redirect('/tasks');
    }

    public function edit(Task $task)
    {
        return view('tasks.editing', compact('task'));
    }

    public function update(Task $task)
    {
        $attributes = request()->validate([
            'title'=>'required',
            'shortDescription'=>'required',
            'body'=>'required',
        ]);

        $task->update($attributes);

        $taskTags = $task->tags->keyBy('name');

        $tags = collect(explode(',', request('tags')))->keyBy(function ($item) { return $item; });

        $syncIds = $taskTags->intersectByKeys($tags)->pluck('id')->toArray();

        $tagsToAttach = $tags->diffKeys($taskTags);

        foreach ($tagsToAttach as $tag) {
            $tag = Tag::firstOrCreate(['name' => $tag]);

            $syncIds[] = $tag->id;
        }

        $task->tags()->sync($syncIds);

        return redirect('/tasks');
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }
}
