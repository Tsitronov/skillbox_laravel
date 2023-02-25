<?php
namespace App\Http\Controllers;
use Illuminate\Filesystem\Filesystem;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $name = ' ';
        $task = \App\Task::orderBy('id', 'asc')->get();
        
        return view('task.tutti', compact('name', 'task'));
    }

    public function show(\App\Task $task){
        //$task = \App\Task::get()->find($task);

        return view('task.index', compact('task'));
    }

    public function create(){
        return view('task.create');
    }

    public function store(){
        $attributes = request()->validate([
            'nome'=>'required | max:300',
            'title'=>'required | max:3000',
            'body'=>'required',
        ]);
 
        \App\Task::create($attributes);
        return redirect('/task');
    }

    public function edit(\App\Task $task)
    {
        return view('task.edit', compact('task'));
    }

    public function update(\App\Task $task)
    {
        $attributes = request()->validate([
            'nome' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);
        $task->update($attributes);
        $taskTags = $task->tags->keyBy('name');
        $tags = collect(explode(',', request('tags')))->keyBy(function($item){
            return $item;
        });
        $tagsToAttach = $tags->diffKeys($taskTags);
        $tagsToDetach = $taskTags->diffKeys($tags);

        //dd($taskTags, $tags, $tagsToAttach, $tagsToDetach);

        foreach ($tagsToAttach as $tag) {
            $tag = \App\Tag::firstOrCreate(['name'=>$tag]);
            $task->tags()->attach($tag);
        }


        foreach ($tagsToDetach as $tag) {
            $task->tags()->detach($tag);
        }

        return redirect('/task');
    }

    public function destroy(\App\Task $task)
    {
        $task->delete();
        return redirect('/task');
    }
}
