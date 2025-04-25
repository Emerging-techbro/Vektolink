@include('app.backend_header')

     <!-- Main content area with your form and table -->
     <div class="main-content">
            <div class="header">
                <h1>Product Management</h1>
                <div class="user-profile">
                    <img src="admin.jpg" alt="Admin">
                    <span>{{Auth::user()->name}}</span>
                </div>
            </div>

    <form method="post" action="{{url('add product')}}">
        @csrf
           Category_id:<br>
          <select name="category_id" style= "width: 400px; height: 32.67px;">
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
            <th>Action</th>
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
            <td><a href="{{ url('delete-product-'.$pro->id)}}"><button style="background-color: red; color: white;">Delete</button> </a>
                <a href="{{ url('edit-product-'.$pro->id)}}"><button style="background-color: yellow; color: black;">Edit</button> </a>
        </tr>
        @endforeach
    </table>
</body>
</html>