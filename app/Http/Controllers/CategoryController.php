<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function  category(){
        $category=CategoryModel::all();
        return view('category',compact('category'));
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


    //method for the editing
    public function edit_category($id) {
        $category= CategoryModel::find($id);
        return view('edit_category',compact('category'));
    }

    //method for updating after editing
    public function update_category($id, Request $request) {
        $category= CategoryModel::find($id);

       $category->category_id=$request->input('category_id');
       $category->category_name=$request->input('category_name');
       $category->category_details=$request->input('category_details');
       $category->update();

       return redirect('/category');

    }
    
    //method for the delete
    public function delete_category($id) {
        $category= CategoryModel::find($id);

        $category->delete();
        return redirect('/category');        
    }
}