<!DOCTYPE html>
<html>
    <head>
        <title> Kelly's Tech Solutions </title>
    </head>
<body>
<form method="post" action="{{url('update-client-'.$client->id)}}">
        @csrf
           Client_name:<br>
          <input type="numbers" value="{{$client->client_name}}" name="client_name"><br>
           Client_number <br>
           <input type="text" value="{{$client->client_number}}" name="client_number"> <br>
           Client_location <br>
           <input type="text" value="{{$client->client_location}}" name="client_location"> <br>
           <button type="submit">Update</button>
           
    </form>
</body>
<html>