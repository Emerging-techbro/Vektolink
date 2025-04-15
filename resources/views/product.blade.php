<!DOCTYPE html>
<html>
    <head>
        <title> Kelly's Tech Solutions </title>
    </head>
    <body> 
        <!-- Navigation column (left side) -->
    <nav> 
        <p>
            <a href="{{ url('/admin') }}"><button>Admin</button></a><br><br>
            <a href="{{ url('dashboard')}}"><button>Dashboard</button></a><br><br>
            <a href="{{ url('category')}}"><button>Category</button></a><br><br>
            <a href="{{ url('client')}}"><button>Client</button></a><br><br>
            <a href="{{ url('product')}}"><button>Product</button></a><br><br>
            <a href="{{ url('sales')}}"><button>Sales</button></a>
        </p>
    </nav>

    <form method="post" action="{{url('add product')}}">
        @csrf
           Category_id:<br>
          <select name="category_id">
            <option>--Select Category--</option>
            @foreach($category as $cat)
            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
            @endforeach
          </select><br>
          
           Product_id <br>
           <input type="text" name="product_id"> <br>
           Product_name <br>
           <input type="text" name="product_name"> <br>
           Product_details <br>
           <input type="text" name="product_details"> <br>
           <button type="submit">Submit</button>
           
    </form>
    
    <table border="10px">
        <tr>
            <th>id</th>
            <th>category_id</th>
            <th>product_id</th>
            <th>product_name</th>
            <th>product_details</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        @foreach($product as $pro)
        <tr>
            <td>{{$pro->id}} </td>
            <td>{{$pro->category_id}} </td>
            <td>{{$pro->product_id}}</td>
            <td>{{$pro->product_name}} </td>
            <td>{{$pro->product_details}} </td>
            <td>{{$pro->created_at}}</td>
            <td>{{$pro->updated_at}} </td>
        </tr>
        @endforeach
    </table>
</body>
</html>