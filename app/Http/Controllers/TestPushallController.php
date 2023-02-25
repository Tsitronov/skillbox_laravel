<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestPushallController extends Controller
{
    public function __construct(){
        $this->middleware('pushallTest', ['only'=> ['show']]);
    }
    public function index(){
        return 'hello - index';
    }

    public function show(){
        return 'hello - show';
    }
}
