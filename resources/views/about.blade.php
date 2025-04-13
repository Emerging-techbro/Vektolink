<!DOCTYPE html>
<html> 
    <head>
        <title> Kelly's Tech Solutions </title>
        <style>
            /* Modern styling for About Us page */
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f8fafc;
                color: #334155;
                line-height: 1.6;
                margin: 0;
                padding: 0;
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
                padding: 0;
            }
            
            nav button {
                background-color: rgba(255, 255, 255, 0.15);
                border: none;
                color: white;
                padding: 0.75rem 1.5rem;
                margin: 0 0.5rem;
                border-radius: 9999px;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
                font-size: 1rem;
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
            
            nav button:hover {
                background-color: white;
                color: #4f46e5;
                transform: translateY(-2px);
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            }
            
            /* Main Content */
            body > *:not(nav) {
                max-width: 800px;
                margin-left: auto;
                margin-right: auto;
                padding: 0 1.5rem;
            }
            
            /* Headings */
            h1 {
                color: #4f46e5;
                text-align: center;
                margin: 3rem 0 1.5rem;
                font-size: 2.5rem;
                font-weight: 700;
                position: relative;
            }
            
            h1::after {
                content: '';
                position: absolute;
                bottom: -0.75rem;
                left: 50%;
                transform: translateX(-50%);
                width: 5rem;
                height: 0.25rem;
                background: #f59e0b;
                border-radius: 0.25rem;
            }
            
            h2 {
                color: #4f46e5;
                margin: 2.5rem 0 1rem;
                font-size: 1.75rem;
                font-weight: 600;
                padding-left: 0.5rem;
                border-left: 4px solid #7c3aed;
            }
            
            /* Content Styling */
            p {
                margin-bottom: 1.5rem;
                font-size: 1.125rem;
                color: #475569;
            }
            
            ul {
                background-color: white;
                border-radius: 0.75rem;
                padding: 1.5rem 2rem;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
                margin: 1.5rem 0;
                list-style-type: none;
            }
            
            ul li {
                position: relative;
                padding-left: 2rem;
                margin-bottom: 1rem;
                font-size: 1.125rem;
                line-height: 1.75;
            }
            
            ul li:before {
                content: '✓';
                color: #10b981;
                font-weight: bold;
                position: absolute;
                left: 0;
            }
            
            b {
                color: #4f46e5;
                font-weight: 600;
            }
            
            br {
                display: block;
                margin-bottom: 1.5rem;
                content: "";
            }
            
            /* Responsive Design */
            @media (max-width: 768px) {
                nav button {
                    padding: 0.5rem 1rem;
                    margin: 0 0.25rem;
                    font-size: 0.875rem;
                }
                
                h1 {
                    font-size: 2rem;
                }
                
                h2 {
                    font-size: 1.5rem;
                }
                
                body > *:not(nav) {
                    padding: 0 1rem;
                }
                
                ul {
                    padding: 1.25rem;
                }
                
                ul li {
                    padding-left: 1.5rem;
                }
            }
        </style>
    </head>
    <body>
        <nav>
            <p> 
                 <center> <img src="Logo.jpeg" width="80px" height="80px"> <center>
                 <center> 
                 <a href="{{ url('/') }}"><button> Home </button></a>
                 <a href="{{ url('/about') }}"><button> About </button></a>
                 <a href="{{ url('/service') }}"><button> Services</button></a>
                 <a href="{{ url('/contact') }}"><button> Contact </button></a>
                 <a href="{{ url('/admin') }}"><button> Admin <button></a>
                </center>
            </p>
        </nav>

        <h1> About Us</h1>
        <p> Welcome to Kelly's Tech Solutions, 
            your one-stop solution for digital services, tech support, and creative solutions!
        </p> <br><br>
        <h2>Who We Are</h2>
        <p>
            We are a dedicated team of tech enthusiasts and creative professionals committed to providing high-quality, 
            reliable, and affordable services to individuals and businesses. 
            Whether you need graphic design, software installations, game setups, 
            system troubleshooting, drive partitioning, or software fixes, we've got you covered!
        <h2>Why Choose Us?</h2>
        <p>
            <ul>
            <li><b>Expertise & Experience</b> - Skilled professionals with  hands-on experience.</li>
            <li><b>Fast & Reliable Service</b> - Quick turnaround without compromising quality.</li>
            <li><b>Affordable Pricing</b> - Competitive rates with no hidden charges.</li>
            <li><b>Customer Satisfaction</b> - Your needs come first; we ensure you're 100% happy with our work.</li>
            </ul>
        </p>
        <h2>Our Mission</h2>
        <p>
         To simplify technology for our clients by providing efficient, secure, and professional 
         services that save time and eliminate frustration.<br><br>
        Get in touch today and let's solve your tech challenges!
        </p>
    </body>
</html>