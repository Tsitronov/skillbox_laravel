<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompletedStepsController extends Controller
{
    
    public function store(\App\Step $step)
    {
        $step->complete();
        return back();
    }

    public function destroy(\App\Step $step)
    {
        $step->incomplete();
        return back();
    }
}
