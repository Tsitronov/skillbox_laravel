<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\App\Tag $tag)
    {
        $task = $tag->task()->with('tags')->get();
        return view('task.tutti', compact('task'));
    }
}
