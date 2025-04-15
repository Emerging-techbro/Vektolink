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


    <form method="post" action="{{url('add category')}}">
        @csrf
           Category_id:<br>
          <input type="numbers" name="category_id"><br>
           Category_name <br>
           <input type="text" name="category_name"> <br>
           Category_details <br>
           <input type="text" name="category_details"> <br>
           <button type="submit">Submit</button>
           
    </form>
    <table border="10px">
        <tr>
            <th>id</th>
            <th>category_id</th>
            <th>category_name</th>
            <th>category_details</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        @foreach($category as $cat)
        <tr>
            <td>{{$cat->id}} </td>
            <td>{{$cat->category_id}} </td>
            <td>{{$cat->category_name}}</td>
            <td>{{$cat->category_details}} </td>
            <td>{{$cat->created_at}}</td>
            <td>{{$cat->updated_at}} </td>
        </tr>
        @endforeach
    </table>
</body>
</html>