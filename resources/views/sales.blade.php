<!DOCTYPE html>
<html>
    <head>
        <title> Kelly's Tech Solutions </title>
    </head>
    <body> 
        <!-- Navigation column (left side) -->
    <nav> 
        <p>
            <a href="{{ url('/admin') }}"><button> Admin <button></a> <br><br>
            <a href="{{ url('dashboard')}}"><button>Dashboard</button> <br><br>
            <a href="{{ url('category')}}"><button>Category</button> <br><br>
            <a href="{{ url('client')}}"><button>Client</button> <br><br>
            <a href="{{ url('product')}}"><button>Product</button> <br><br>
            <a href="{{ url('sales')}}"><button>Sales</button>
        </p>
    </nav>