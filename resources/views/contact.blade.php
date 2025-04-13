<!DOCTYPE html>
<html> 
    <head>
        <title> Kelly's Tech Solutions </title>
        <style>
            /* Body Styling */
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f5f7ff;
                color: #2c3e50;
                line-height: 1.6;
                margin: 0;
                padding: 0;
            }
            
            /* Navigation Bar */
            nav {
                background: linear-gradient(135deg, #4a6bff, #6c5ce7);
                padding: 15px 0;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }
            
            nav p {
                margin: 0;
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
                background-color: rgba(255, 255, 255, 0.2);
                border: none;
                color: white;
                padding: 12px 24px;
                margin: 0 10px;
                border-radius: 30px;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3s ease;
                font-size: 16px;
            }
            
            nav button:hover {
                background-color: white;
                color: #4a6bff;
                transform: translateY(-2px);
            }
            
            /* Headings */
            h1 {
                color: #4a6bff;
                text-align: center;
                margin: 40px 0 30px;
                font-size: 2.8rem;
                position: relative;
            }
            
            h1::after {
                content: '';
                position: absolute;
                bottom: -15px;
                left: 50%;
                transform: translateX(-50%);
                width: 100px;
                height: 4px;
                background: #ff6b6b;
                border-radius: 2px;
            }
            
            h3 {
                color: #6c5ce7;
                margin: 30px 0 20px;
                font-size: 1.5rem;
                display: flex;
                align-items: center;
                padding-left: 20px;
            }
            
            /* Content Styling */
            p {
                margin-bottom: 20px;
                font-size: 1.1rem;
                padding: 0 20px;
                max-width: 800px;
                margin-left: auto;
                margin-right: auto;
            }
            
            /* Links */
            a {
                color: #6c5ce7;
                text-decoration: none;
                font-weight: 600;
                transition: color 0.3s ease;
            }
            
            a:hover {
                color: #ff6b6b;
                text-decoration: underline;
            }
            
            b {
                color: #2c3e50;
            }
            
            /* Responsive Design */
            @media (max-width: 768px) {
                nav button {
                    padding: 10px 15px;
                    margin: 0 5px;
                    font-size: 14px;
                }
                
                h1 {
                    font-size: 2.2rem;
                }
            }
        </style>

    </head>
    <body>
        <nav>
            <p> 
               <center><img src="logo.jpeg" width="80" height="80"><center>
                 <center> 
                 <a href="{{ url('/') }}"><button> Home </button></a>
                 <a href="{{ url('/about') }}"><button> About </button></a>
                 <a href="{{ url('/service') }}"><button> Services</button></a>
                 <a href="{{ url('/contact') }}"><button> Contact </button></a>
                 <a href="{{ url('/admin') }}"><button> Admin <button></a>
                </center>
            </p>
        </nav>
    <h1> Contact Us</h1>
    <h3>📩 Let's Get in Touch!</h3>
    <p>Have questions or need assistance with graphic design, software installations, 
       troubleshooting, or any other service? We're here to help! 
       Reach out via your preferred method, and we'll respond promptly.
    </p>
    <h3>Ways to Contact Us</h3>
    <h3>📧 Email</h3>
    <p>
        <b>🔹 General Inquiries and Support</b>:
        <a href="mailto:kelvinkekeligayina@gmail.com"> kelvinkekeligayina@gmail.com</a>
    </p>
    <h3>📞 Phone / WhatsApp</h3>
    <p> <b>🔹 Call/Text</b> +233 245476307 <br>
       <b> 🔹 WhatsApp</b> +233 245476307
    </p>
    <h3>📍 Location</h3>
    <p><b>🔹 Service Area<b>: University Of Cape Coast</p>

    <h3>💬 Social Media</h3>
    <p>
        <b>🔹 Facebook</b>: <a href="https://www.facebook.com/kelvinkekeligayina"> Kelly's Tech Solutions</a><br>
        <b>🔹 Instagram</b>: <a href="https://www.instagram.com/kelvinkekeligayina"> Kelly's Tech Solutions</a><br>
        <b>🔹 Twitter</b>: <a href="https://twitter.com/kelvinkekeligayina"> Kelly's Tech Solutions</a><br>
    </p>
    </body>
</html>
