<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    //
    public function __construct(){

    }
    public function index(){
        return view('category.index');
    }
    public function createCategory(Request $request){
        try{
            $category = new CategoryModel();
            $category->category_name = $request->category_name;
            $category->category_code = $request->category_code;
            $category->icon_url = $request->icon_url;
            $category->status = $request->status;
          
            $category->save();
            return response()->json([
                'message' => 'Category created successfully'
            ]);
        }catch(\Exception $e){

            return response()->json([
                'error' => $e->getMessage()
        ]);
        }
    }
    public function getCategoryById(){
        return view('category.create');
    }
    public function editCategory(){
        return view('category.edit');
    }
    public function showCategory(){
        return view('category.show');
    }   
}
