<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Task;

class TaskController extends Controller
{
    public function list(){
        $tasks = Task::all();

        return $this->jsonWithCORS($tasks);
    }
    public function read($id){
        $task = Task::findOrFail($id);

        return $this->jsonWithCORS($task);
    }
    public function delete(Request $request, $id){

        dump($request);
        return 'coucou suppression';
        // $task = Task::findOrFail($id);

        // $task->delete();
        
        //
    }
    public function update(Request $request, $id){
      dump($request);
      $task = Task::findOrFail($id);

      $task->update();
    }
}