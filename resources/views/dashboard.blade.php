@include('app.backend_header')
        
        <!-- Main content area -->
        <main>
            <div class="header">
                <h1>Dashboard</h1>
                <div class="user-profile">
                    <img src="admin.jpg" alt="Admin">
                    <span>{{Auth::user()->name}}</span>
                </div>
            </div>
            
            <div class="content">
                <p>Welcome to Kelly's Tech Solutions Admin Panel. Select a section from the sidebar to begin.</p>
                <p>You can manage categories, clients, products, and sales from this dashboard.</p>
            </div>
        </main>
    </body>
</html>