<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){

        $tasks = Task::all();
        return $tasks;
        
    }
    public function store(Request $request){

        $task = Task::create([
            'name' => $request->name,
            'complete' => $request->complete,
        ]);

        return $task->id;

    }
    public function show(Task $task){
        
        return $task;
    
    }
    public function update(Request $request, Task $task){

        $task->name = $request->name;
        $task->save();

        return $task;
    }
    public function destroy(Task $task){
        
        $task->delete();

        return response()->json(['success'=>true]);

    }
}
