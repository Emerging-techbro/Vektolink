<!DOCTYPE html>
<html> 
    <head> 
        <title>Kelly's Tech Solutions </title>
        <style>
        .banner{
            background-image: url('background.jpg');
            height: 100vh;
            background-size: cover;
            background-position: center;
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
                     <a href="{{ url('/shop') }}"><button> Shop </button></a>
                     <a href="{{ url('/vendor') }}"><button> Vendor </button></a>
                    </center>
                </p>
                
                    <section class="banner">
                     </section>
            </nav>
        </body>
        
    

</html>