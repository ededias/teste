<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    public function index() 
    {

        $data = Task::all();
        return view('index', ['tasks' => $data]);
    }

    public function create() 
    {

        return view('task');
    }

    public function save(Request $request)
    {
        $data = $request->all();


        $task = new Task();
        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->status = $data['status'];
       
        $task->save();
        return view('index');
    }
    

    public function get(Request $request, $id)
    {
        $data = $request->all();


        $task = Task::find($id);
        // $task = new Task::find($data['id']);
        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->status = $data['status'];
        
        // $task->save();
        return view('task', ['task' => $task]);
    }

    
    public function update(Request $request, $id)
    {
        $data = $request->all();


        $task = Task::find($id);
        // $task = new Task::find($data['id']);
        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->status = $data['status'];
        
        $task->save();
        return view('index');
    }

}
