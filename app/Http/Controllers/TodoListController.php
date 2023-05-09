<?php

namespace App\Http\Controllers;

use App\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{

    public function index()
    {
        $todolists = TodoList::all();
        return view('home', compact('todolists'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);
        Todolist::create($data);
        return back();
    }

    public function destroy(TodoList $todolist)
    {
        $todolist->delete();
        return back();
    }
}
