@include('app.backend_header')

        <!-- Main content area with your form and table -->
        <div class="main-content">
            <div class="header">
                <h1>Client Management</h1>
                <div class="user-profile">
                    <img src="admin.jpg" alt="Admin">
                    <span>{{Auth::user()->name}}</span>
                </div>
            </div>

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
                    <th>Action</th>
                </tr>
                @foreach($client as $cli)
                <tr>
                    <td>{{$cli->id}} </td>
                    <td>{{$cli->client_name}} </td>
                    <td>{{$cli->client_number}}</td>
                    <td>{{$cli->client_location}} </td>
                    <td>{{$cli->created_at}}</td>
                    <td>{{$cli->updated_at}} </td>
                    <td>
                        <a href="{{ url('delete-client-'.$cli->id)}}"><button style="background-color: red; color: white;">Delete</button> </a>
                        <a href="{{ url('edit-client-'.$cli->id)}}"><button style="background-color: yellow; color: black;">Edit</button> </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>