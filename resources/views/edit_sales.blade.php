<!DOCTYPE html>
<html>
    <head>
        <title> Kelly's Tech Solutions </title>
    </head>
<body>
<form method="post" action="{{url('update-sales-'.$sales->id)}}">
        @csrf
           Product_id <br>
           <select name="product_id">
            <option>--Select Product--</option>
            @foreach($product as $pro)
            <option value="{{$pro->id}}">{{$pro->product_name}}</option>
            @endforeach
            </select><br>
           client_id <br>
           <select name="client_id">
            <option>--Select Client--</option>
            @foreach($client as $cli)
            <option value="{{$cli->id}}">{{$cli->client_name}}</option>
            @endforeach
            </select><br>
           Sales_id <br>
           <input type="text" name="sales_id"> <br>
           Sales_details <br>
           <input type="text" name="sales_details"> <br>
           <button type="submit">Update</button>
           
    </form>