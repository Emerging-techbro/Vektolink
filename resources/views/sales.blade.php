@include('app.backend_header')

    <!-- Main content area with your form and table -->
    <div class="main-content">
            <div class="header">
                <h1>Sales Management</h1>
                <div class="user-profile">
                    <img src="admin.jpg" alt="Admin">
                    <span>{{Auth::user()->name}}</span>
                </div>
            </div>

    <form method="post" action="{{url('add-sales')}}">
        @csrf
           Product_id <br>
           <select name="product_id" style= "width: 400px; height: 32.67px;">
            <option>--Select Product--</option>
            @foreach($product as $pro)
            <option value="{{$pro->id}}">{{$pro->product_name}}</option>
            @endforeach
            </select><br>
           client_id <br>
           <select name="client_id" style= "width: 400px; height: 32.67px;">
            <option>--Select Client--</option>
            @foreach($client as $cli)
            <option value="{{$cli->id}}">{{$cli->client_name}}</option>
            @endforeach
            </select><br>
           Sales_id <br>
           <input type="text" name="sales_id"> <br>
           Sales_details <br>
           <input type="text" name="sales_details"> <br>
           <button type="submit">Submit</button>
           
           
    </form>
    
    <table border="10px">
        <tr>
            <th>id</th>
            <th>product_id</th>
            <th>client_id</th>
            <th>sales_id</th>
            <th>sales_details</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Action</th>
        </tr>
        @foreach($sales as $sal)
        <tr>
            <td>{{$sal->id}} </td>
            <td>{{$sal->product_id}}</td>
            <td>{{$sal->client_id}} </td>
            <td>{{$sal->sales_id}} </td>
            <td>{{$sal->sales_details}}</td>
            <td>{{$sal->created_at}} </td>
            <td>{{$sal->updated_at}} </td>
            <td><a href="{{ url('delete-sales-'.$sal->id)}}"><button style="background-color: red; color: white;">Delete</button> </a>
                <a href="{{ url('edit-sales-'.$sal->id)}}"><button style="background-color: yellow; color: black;">Edit</button> </a>
        </tr>
        @endforeach
    </table>
</body>
</html>