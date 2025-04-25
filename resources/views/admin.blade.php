@include('app.backend_header')

     <!-- Main content area with your form and table -->
     <div class="main-content">
            <div class="header">
                <h1>Admin</h1>
                <div class="user-profile">
                    <img src="admin.jpg" alt="Admin">
                    <span>{{Auth::user()->name}}</span>
                </div>
            </div>

            <div class="content">
                <!-- Your page content will go here -->
                <p>Welcome to Kelly's Tech Solutions Admin Panel. Select a section from the sidebar to begin.</p>
            </div>
    
</body>
</html>