@include('app.backend_header')
        <!-- Main content area with your form and table -->
        <div class="main-content">
            <div class="header">
                <h1>Category Management</h1>
                <div class="user-profile">
                    <img src="admin.jpg" alt="Admin">
                    <span>{{Auth::user()->name}}</span>
                </div>
            </div>

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
                    <th>Action</th>
                </tr>
                @foreach($category as $cat)
                <tr>
                    <td>{{$cat->id}} </td>
                    <td>{{$cat->category_id}} </td>
                    <td>{{$cat->category_name}}</td>
                    <td>{{$cat->category_details}} </td>
                    <td>{{$cat->created_at}}</td>
                    <td>{{$cat->updated_at}} </td>
                    <td>
                        <a href="{{ url('delete-category-'.$cat->id)}}"><button style="background-color: red; color: white;">Delete</button> </a>
                        <a href="{{ url('edit-category-'.$cat->id)}}"><button style="background-color: yellow; color: black;">Edit</button> </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>