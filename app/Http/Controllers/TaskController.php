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
        
        $task = Task::findOrFail($id);

        $task->delete();
        
    }
    public function update(Request $request, $id){
      // La on récupère tous les champs qui ont été remplis 
    //   dump($request->all());  
      $task = Task::find($id);

      // si pas de taks
      if(!$task){
          return $this->err404();
      } else {

        $requestData = $request->all();
        // possible grace a fillable dans le model
       $result = $task->update($requestData);

       if($result){
         return $this->succ200();
       }
       else{
           // par défaut lumen renvoie erreur 500 si erreur interne
         return $this->err500();
       }
      }
    }
    public function create(Request $request){

      if($request->has('title') & $request->has('category_id') & $request->has('status') & $request->has('completion')){
        $task = new Task();
        $requestData = $request->all();
        $result = $task->create($requestData);
        if($result){
          return $this->jsonWithCORS($result);
        } 
        else {
          return $this->err500();
        }
      }
      else {
        return $this->err404();
      }


      
    }
}