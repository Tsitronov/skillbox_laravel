<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskStepsController extends Controller
{
    public function store(\App\Task $task){
        $task->addStep(\request()->validate(['description'=>'required | max:30000']));
        return back();

    }
}
