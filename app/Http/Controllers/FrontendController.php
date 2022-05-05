<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

//    public function toDoShow(){
//
//        return view('todo');
//    }

    public function index(){
        $todos = Todo::all();

        return view('todo', compact('todos',));
    }

}

