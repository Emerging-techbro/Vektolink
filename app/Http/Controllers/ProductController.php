<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function  product(){
        $category= CategoryModel::all();
        return view('product',compact('category'));
    }
}
