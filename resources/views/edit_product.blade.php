<!DOCTYPE html>
<html>
    <head>
        <title> Kelly's Tech Solutions </title>
    </head>
<body>
<form method="post" action="{{url('update-product-'.$product->id)}}">
        @csrf
           Category_id:<br>
          <select name="category_id">
            <option value="{{$product->id}}">{{$product->id}}</option>
            <option>--Change Category--</option>
            @foreach($category as $cat)
            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
            @endforeach
          </select><br>
          
           Product_id <br>
           <input type="text" value="{{$product->product_id}}" name="product_id"> <br>
           Product_name <br>
           <input type="text" value="{{$product->product_name}}" name="product_name"> <br>
           Product_details <br>
           <input type="text" value="{{$product->product_details}}" name="product_details"> <br>
           <button type="submit">Update</button>
           
    </form>