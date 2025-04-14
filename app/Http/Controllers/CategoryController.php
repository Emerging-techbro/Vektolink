<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function  category(){
        return view('category');
    }
    


    //adding of the addcategory
    public function add_category(Request $request){
       $category = new CategoryModel;

       $category->category_id=$request->input('category_id');
       $category->category_name=$request->input('category_name');
       $category->category_details=$request->input('category_details');
       $category->save();

       return redirect()->back()->with('status','Category Successful');
    }
}