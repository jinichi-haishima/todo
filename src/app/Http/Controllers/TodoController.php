<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //
    public function index(){
        return view ('index');
    }
    public function store(Request $request){
        Post::create([
            'content' => $request->input('content'),
        ]);
        return redirect ('/');
    }

}
