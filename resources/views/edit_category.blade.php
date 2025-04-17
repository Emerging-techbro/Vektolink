<!DOCTYPE html>
<html>
    <head>
        <title> Kelly's Tech Solutions </title>
    </head>
<body>
    <form method="post" action="{{url('update-category-'.$category->id)}}">
        @csrf
           Category_id:<br>
          <input type="numbers" value="{{$category->category_id}}" name="category_id"><br>
           Category_name <br>
           <input type="text" value="{{$category->category_name}}" name="category_name"> <br>
           Category_details <br>
           <input type="text" value="{{$category->category_details}}" name="category_details"> <br>
           <button type="submit">Update</button>
           
    </form>
</body>
<html>