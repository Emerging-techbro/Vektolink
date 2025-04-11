<!DOCTYPE html>
<html> 
    <head> 
        <title>Kelly's Tech Solutions </title>
        <style>
            /* Modern styling for the page */
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                margin: 0;
                padding: 0;
                color: #2d3748;
                line-height: 1.6;
            }
            
            /* Navigation Bar */
            nav {
                background: linear-gradient(135deg, #4f46e5, #7c3aed);
                padding: 1rem 0;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
                position: sticky;
                top: 0;
                z-index: 100;
            }
            
            nav p {
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            nav img {
                margin-right: 1.5rem;
                border-radius: 50%;
                border: 2px solid white;
                transition: transform 0.3s ease;
            }
            
            nav img:hover {
                transform: scale(1.1);
            }
            
            nav button {
                background-color: rgba(255, 255, 255, 0.15);
                border: none;
                color: white;
                padding: 0.75rem 1.5rem;
                margin: 0.5rem;
                border-radius: 9999px;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
                font-size: 1rem;
                min-width: 100px;
            }
            
            nav button:hover {
                background-color: white;
                color: #4f46e5;
                transform: translateY(-2px);
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            }

        .banner{
            background-image: url('background.jpg');
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
            }

        }
         /* Responsive Design */
         @media (max-width: 1024px) {
                nav p {
                    flex-direction: column;
                    text-align: center;
                }
                
                nav img {
                    margin-right: 0;
                    margin-bottom: 1rem;
                }
                
                .banner {
                    background-attachment: scroll;
                }
            }
            
            @media (max-width: 640px) {
                nav button {
                    padding: 0.5rem 1rem;
                    font-size: 0.875rem;
                    min-width: auto;
                }
            }

        </style>
    </head>
        <body> 
            <nav>
                <p> 
                   <img src="Logo.jpeg" width="50px" height="50px">
                     <center> 
                     <a href="{{ url('/') }}"><button> Home </button></a>
                     <a href="{{ url('/about') }}"><button> About </button></a>
                     <a href="{{ url('/service') }}"><button> Services</button></a>
                     <a href="{{ url('/contact') }}"><button> Contact </button></a>
                     <a href="{{ url('/admin') }}"><button> Admin <button></a>
                    </center>
                </p>
                
                    <section class="banner">
                     </section>
            </nav>
        </body>
        
    

</html>