<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Category;

class CategoryController extends Controller
{
    public function list(){
        $categories = Category::all();

        return $this->jsonWithCORS($categories);
    }
    public function read($id){
        $category = Category::findOrFail($id);

        return $this->jsonWithCORS($category);
    }
    public function delete(Request $request, $id){

        dump($request);
        return 'coucou suppression';
        // $category = Category::findOrFail($id);

        // $Category->delete();
        
        //
    }
    public function update(Request $request, $id){
        dump($request);
        $category = Category::findOrFail($id);
  
        $category->update();
      }
}