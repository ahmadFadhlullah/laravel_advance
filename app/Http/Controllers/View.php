<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class View extends Controller
{
    public function index(){
        return view('view.index');
    }
    public function form(){
        return view('view.form');
    }
}
