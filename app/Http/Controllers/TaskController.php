<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function show(Task $task)
    {

        //return $task;
        return view('tasks.show',compact('task'));

    }
}
