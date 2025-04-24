<!DOCTYPE html>
<html>
    <head>
        <title> Kelly's Tech Solutions </title>
        <style>
            /* Modern styling for the page */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: #2d3748;
                line-height: 1.6;
                display: flex;
                min-height: 100vh;
                background-color: #f8fafc;
            }
            
            /* Navigation Bar - Left Side */
            nav {
                background: linear-gradient(135deg, #4f46e5, #7c3aed);
                width: 240px;
                min-height: 100vh;
                padding: 2rem 0;
                box-shadow: 4px 0 6px -1px rgba(0, 0, 0, 0.1);
                position: fixed;
                left: 0;
                top: 0;
                z-index: 100;
            }
            
            nav p {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                padding: 0 1rem;
            }
            
            nav a {
                width: 100%;
                margin-bottom: 0.5rem;
                text-decoration: none;
            }
            
            nav button {
                background-color: rgba(255, 255, 255, 0.15);
                border: none;
                color: white;
                padding: 0.75rem 1.5rem;
                width: 100%;
                text-align: left;
                border-radius: 6px;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
                font-size: 0.95rem;
                display: flex;
                align-items: center;
            }
            
            nav button:hover {
                background-color: white;
                color: #4f46e5;
                transform: translateX(5px);
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            }
            
            nav button::before {
                content: "→";
                margin-right: 10px;
                opacity: 0;
                transition: all 0.3s ease;
            }
            
            nav button:hover::before {
                opacity: 1;
            }
            
            /* Main Content Area - Right Side */
            .main-content {
                flex: 1;
                margin-left: 240px;
                padding: 2rem;
            }
            
            .header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 2rem;
                padding-bottom: 1.5rem;
                border-bottom: 1px solid #e2e8f0;
            }
            
            .header h1 {
                color: #1e293b;
                font-size: 1.75rem;
                font-weight: 700;
            }
            
            .user-profile {
                display: flex;
                align-items: center;
                gap: 0.75rem;
            }
            
            .user-profile img {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                object-fit: cover;
                border: 2px solid #e2e8f0;
            }
            
            /* Your existing form and table styles - kept exactly as you had them */
            form {
                margin-bottom: 2rem;
                padding: 1rem;
                background: white;
                border-radius: 0.5rem;
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
            }
            
            form input {
                margin: 0.5rem 0;
                padding: 0.5rem;
                width: 100%;
                max-width: 400px;
                border: 1px solid #e2e8f0;
                border-radius: 4px;
            }
            
            form button {
                padding: 0.5rem 1rem;
                background-color: #4f46e5;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin-top: 1rem;
            }
            
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 2rem;
            }
            
            table, th, td {
                border: 1px solid #ddd;
            }
            
            th, td {
                padding: 0.75rem;
                text-align: left;
            }
            
            th {
                background-color: #f1f5f9;
            }
            
            tr:nth-child(even) {
                background-color: #f8fafc;
            }
            
            /* Responsive Design */
            @media (max-width: 768px) {
                nav {
                    width: 70px;
                    padding: 1rem 0;
                }
                
                nav button {
                    padding: 0.75rem;
                    justify-content: center;
                }
                
                nav button span {
                    display: none;
                }
                
                nav button::before {
                    margin-right: 0;
                    font-size: 1.2rem;
                }
                
                .main-content {
                    margin-left: 70px;
                    padding: 1rem;
                }
            }
        </style>
    </head>
<body>
         <!-- Navigation column (left side) -->
        <nav> 
            <p>
                <a href="{{ url('/admin') }}"><button>Admin</button></a>
                <a href="{{ url('dashboard')}}"><button>Dashboard</button></a>
                <a href="{{ url('category')}}"><button>Category</button></a>
                <a href="{{ url('client')}}"><button>Client</button></a>
                <a href="{{ url('product')}}"><button>Product</button></a>
                <a href="{{ url('sales')}}"><button>Sales</button></a>
            </p>
        </nav>

         <!-- Main content area with your form and table -->
         <div class="main-content">
            <div class="header">
                <h1>Edit Product</h1>
                <div class="user-profile">
                    <img src="admin.jpg" alt="Admin">
                    <span>Admin</span>
                </div>
            </div>
<form method="post" action="{{url('update-product-'.$product->id)}}">
        @csrf
           Category_id:<br>
          <select name="category_id">
            <option value="{{$product->id}}">{{$product->id}}</option>
            <option>--Change Category--</option>
            @foreach($category as $cat)
            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
            @endforeach
          </select><br>
          
           Product_id <br>
           <input type="text" value="{{$product->product_id}}" name="product_id"> <br>
           Product_name <br>
           <input type="text" value="{{$product->product_name}}" name="product_name"> <br>
           Product_details <br>
           <input type="text" value="{{$product->product_details}}" name="product_details"> <br>
           <button type="submit">Update</button>
           
    </form>