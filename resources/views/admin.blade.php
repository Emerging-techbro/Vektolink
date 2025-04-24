<!DOCTYPE html>
<html>
    <head>
        <title>Kelly's Tech Solutions</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            
            body {
                display: flex;
                min-height: 100vh;
                background-color: #f5f7fa;
            }
            
            nav {
                width: 220px;
                background: linear-gradient(135deg, #4f46e5, #7c3aed);
                padding: 20px 0;
                height: 100vh;
                position: fixed;
                box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            }
            
            nav p {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            
            nav button {
                width: 180px;
                padding: 12px 15px;
                margin: 5px 0;
                background: rgba(255, 255, 255, 0.1);
                color: white;
                border: none;
                border-radius: 6px;
                cursor: pointer;
                font-size: 14px;
                font-weight: 500;
                transition: all 0.3s ease;
                text-align: left;
                display: flex;
                align-items: center;
            }
            
            nav button:hover {
                background: (135deg, #4f46e5, #7c3aed);
                transform: translateX(5px);
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
            
            main {
                flex: 1;
                margin-left: 220px;
                padding: 30px;
                background-color: white;
                min-height: 100vh;
                border-radius: 10px 0 0 0;
                box-shadow: -2px 0 5px rgba(0, 0, 0, 0.05);
            }
            
            .header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 30px;
                padding-bottom: 20px;
                border-bottom: 1px solid #eaeaea;
            }
            
            .header h1 {
                color: #2c3e50;
                font-size: 24px;
                font-weight: 600;
            }
            
            .user-profile {
                display: flex;
                align-items: center;
            }
            
            .user-profile img {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                margin-right: 10px;
            }
            
            .content {
                background: white;
                padding: 25px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            }
            
            @media (max-width: 768px) {
                nav {
                    width: 70px;
                }
                
                nav button {
                    width: 50px;
                    height: 50px;
                    justify-content: center;
                }
                
                nav button span {
                    display: none;
                }
                
                main {
                    margin-left: 70px;
                }
            }
        </style>
    </head>
    <body> 
        <!-- Navigation column (left side) -->
        <nav> 
            <p>
                <a href="{{ url('dashboard')}}"><button><span>Dashboard</span></button></a>
                <a href="{{ url('category')}}"><button><span>Category</span></button></a>
                <a href="{{ url('client')}}"><button><span>Client</span></button></a>
                <a href="{{ url('product')}}"><button><span>Product</span></button></a>
                <a href="{{ url('sales')}}"><button><span>Sales</span></button></a>
            </p>
        </nav>
        
        <!-- Main content area -->
        <main>
            <div class="header">
                <h1>Dashboard</h1>
                <div class="user-profile">
                    <img src="admin.jpg" alt="Admin">
                    <span>Admin</span>
                </div>
            </div>
            
            <div class="content">
                <!-- Your page content will go here -->
                <p>Welcome to Kelly's Tech Solutions Admin Panel. Select a section from the sidebar to begin.</p>
            </div>
        </main>
    </body>
</html>