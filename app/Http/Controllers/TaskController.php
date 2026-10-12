<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
         $heading = "Meri Tasks List";
         $tasks = Task::all();
        return view('task.index' , ['Ali' => $heading] , ['tasks' => $tasks]);
    }

    public function create(){
        return view('task.create');
    }

    public function store(Request $request){
      $request->validate([
            'name'=> 'required',
            'price'=> 'required|numeric',
      ]);

      Task::create([
       'name'=> $request->name,
       'price'=> $request->price
      ]);

       return redirect('/task');
    }

    public function edit(Task $task){
        return view('task.edit' , ['task' => $task]);
    }


    public function update(Request $request , Task $task){
        $request->validate([
            'name'=> 'required',
            'price' => 'required | numeric',
        ]);
        
        $task->update([
             'name'=> $request->name,
            'price' =>$request->price,

             
        ]);

        return redirect('/task');
    }
    public function destroy(Task $task){
                 
        $task -> delete(); 
         return redirect('/task');
        }
    }

