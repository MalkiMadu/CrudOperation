<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $response['tasks']=$this->task->all();
        return view('pages.todo.index')->with($response);
    }

    public function store(Request $request)
    {
       $this->task->create($request->all());
       return redirect()->back();
    }

    public function delete($task_id)
    {
        $task=$this->task->find($task_id);
        $task->delete();

        return redirect()->back();
    }
    public function done($task_id)
    {
        $task=$this->task->find($task_id);
        $task->done=1;
        $task->update();

        return redirect()->back();
    }
}
