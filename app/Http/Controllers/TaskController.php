<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class TaskController extends Controller
{

    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }
    public function indexabc()
    {
        $tasks = \App\Models\Task::orderBy('title', 'ASC')
            ->get();
        return view('indexabc', [
            'tasks' => $tasks,
        ]);
    }
    public function singletask($task_id)
    {
        $task = \App\Models\Task::find($task_id);

        Carbon::setLocale('fr');
        return view('singletask', [
            'task' => $task,

        ]);

    }
    public function taskdelete($task_id)
    {
        $task = \App\Models\Task::find($task_id);
        $task->delete();
        return view('taskdelete', [
            'task' => $task,
        ]);

    }

}