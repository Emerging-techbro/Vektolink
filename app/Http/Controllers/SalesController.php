<?php

namespace App\Http\Controllers;
use App\Models\SalesModel;
use App\Models\ProductModel;
use App\Models\ClientModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class SalesController extends Controller
{
   //
   public function  sales(){
    $sales=SalesModel::all();
    $product=ProductModel::all();
    $client=ClientModel::all();
    $category=CategoryModel::all();
       return view('sales',compact('sales','product','client','category'));

   }

   //addsales
public function add_sales(Request $request){
    $sales= new SalesModel();

    $sales->product_id=$request->input('product_id');
    $sales->client_id=$request->input('client_id');
    $sales->sales_id=$request->input('sales_id');
    $sales->sales_details=$request->input('sales_details');
    $sales->save();

    return redirect()->back()->with('status','Sales Successful');

    }

    //editsales
    public function edit_sales($id) {
        $sales= SalesModel::find($id);
        $client= ClientModel::all();
        $product= ProductModel::all();
        return view('edit_sales',compact('product','client','sales'));
    }

    //updatesales after editing
    public function update_sales($id, Request $request) {
    $sales=SalesModel::find($id);
    $sales->product_id=$request->input('product_id');
    $sales->client_id=$request->input('client_id');
    $sales->sales_id=$request->input('sales_id');
    $sales->sales_details=$request->input('sales_details');

    $sales->update();

    return redirect('/sales');

    }
    //method for the delete
    public function delete_sales($id) {
    $sales= SalesModel::find($id);

    $sales->delete();
    
    return redirect('/sales');        
}

}