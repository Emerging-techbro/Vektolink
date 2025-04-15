<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    //
    public function  product(){
        $product= ProductModel::all();
        $category= CategoryModel::all();
        return view('product',compact('product','category'));
    }

    //Ading of the addproduct
     //adding of the addclient
     public function add_product(Request $request){
        $product = new ProductModel;
 
        $product->category_id=$request->input('category_id');
        $product->product_id=$request->input('product_id');
        $product->product_name=$request->input('product_name');
        $product->product_details=$request->input('product_details');
        $product->save();
 
        return redirect()->back()->with('status','Product Successful');
     }

}
