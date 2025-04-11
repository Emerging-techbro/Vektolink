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