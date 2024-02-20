<?php

namespace App\Http\Controllers;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){

        return view('task.index');
    }

    public function create(){

        return view('task.create');
    }
    public function store (TaskRequest $request) {

        $validatedData = $request->validated();
    
        // Pastikan description tersedia sebelum menyimpannya
        $description = $request->input('description', ''); 
    
        $task = new Task();
        $task->name = $validatedData['name'];
        $task->description = $description; // Assign description
        $task->save();
    
        return redirect('/task');
    }
}
