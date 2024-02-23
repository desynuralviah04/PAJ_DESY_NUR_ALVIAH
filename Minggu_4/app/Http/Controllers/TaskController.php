<?php

namespace App\Http\Controllers;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $task = Task::all();
        return view('task.index',compact('task'));
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
    public function show (Task $task)
    {
        return view('task.show',compact('task'));
    }
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('task.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $tasks = Task::findOrFail($id);
        $tasks->update($request->all());
        return redirect('/task');
    }
}
