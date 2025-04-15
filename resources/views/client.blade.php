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

    <form method="post" action="{{url('add client')}}">
        @csrf
           Client_name:<br>
          <input type="numbers" name="client_name"><br>
           Client_number <br>
           <input type="text" name="client_number"> <br>
           Client_location <br>
           <input type="text" name="client_location"> <br>
           <button type="submit">Submit</button>
           
    </form>

    <table border="10px">
        <tr>
            <th>id</th>
            <th>client_name</th>
            <th>client_number</th>
            <th>client_location</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        @foreach($client as $cli)
        <tr>
            <td>{{$cli->id}} </td>
            <td>{{$cli->client_name}} </td>
            <td>{{$cli->client_number}}</td>
            <td>{{$cli->client_location}} </td>
            <td>{{$cli->created_at}}</td>
            <td>{{$cli->updated_at}} </td>
        </tr>
        @endforeach
    </table>
</body>
</html>