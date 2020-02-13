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
    
        $category = Category::findOrFail($id);

        $category->delete();
         
    }
    public function update(Request $request, $id){
        
        $category = Category::findOrFail($id);
  
        $category->update();
      }
}