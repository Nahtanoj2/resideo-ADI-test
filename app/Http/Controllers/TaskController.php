<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return inertia('Home', ['meta' => ['title' => 'Create Tasks'], 'tasks' => $tasks])->withViewData(['meta' => ['title' => 'Create Tasks']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->name = $request->input('new_task');
        $task->save();

        $tasks = Task::all();
        return inertia('Home', ['meta' => ['title' => 'Create Tasks'], 'tasks' => $tasks])->withViewData(['meta' => ['title' => 'Create Tasks']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task->name = $request->input('name');
        $task->save();
        return ['task' => $task];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }

    public function completeTask(Request $request, Task $task)
    {
        $task->checked = 1;
        $task->save();
        return ['task' => $task];
    }

    public function completed()
    {
        $tasks = Task::where('checked', 1)->get();
        return inertia('Completed', ['tasks' => $tasks, 'meta' => ['title' => 'Completed Tasks']])->withViewData(['meta' => ['title' => 'Completed Tasks']]);
    }
}
