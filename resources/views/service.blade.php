<!DOCTYPE html>
<html> 
    <head> 
        <title>Kelly's Tech Solutions </title>
        <style>
            /* Modern styling for services page */
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
                position: sticky;
                top: 0;
                z-index: 100;
            }
            
            nav p {
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            nav img {
                margin-right: 20px;
                border-radius: 50%;
                border: 2px solid white;
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
            
            /* Main Content */
            .content {
                max-width: 1000px;
                margin: 40px auto;
                padding: 0 20px;
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
            
            h2 {
                color: #4a6bff;
                margin: 40px 0 20px;
                font-size: 2rem;
                border-bottom: 2px solid #6c5ce7;
                padding-bottom: 10px;
            }
            
            h3 {
                color: #6c5ce7;
                margin: 30px 0 15px;
                font-size: 1.5rem;
                display: flex;
                align-items: center;
            }
            
            /* Content Styling */
            p {
                margin-bottom: 20px;
                font-size: 1.1rem;
            }
            
            ul {
                background-color: white;
                border-radius: 10px;
                padding: 20px 30px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                margin: 20px 0;
                list-style-type: none;
            }
            
            ul br {
                display: none;
            }
            
            ul li {
                position: relative;
                padding-left: 30px;
                margin-bottom: 10px;
                font-size: 1.1rem;
            }
            
            ul li:before {
                content: '✔';
                color: #4a6bff;
                position: absolute;
                left: 0;
                font-weight: bold;
            }
            
            /* Responsive Design */
            @media (max-width: 768px) {
                nav p {
                    flex-direction: column;
                }
                
                nav img {
                    margin-right: 0;
                    margin-bottom: 15px;
                }
                
                nav button {
                    padding: 10px 15px;
                    margin: 5px;
                    font-size: 14px;
                }
                
                h1 {
                    font-size: 2.2rem;
                }
                
                h2 {
                    font-size: 1.8rem;
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
        </nav>
        
        <div class="content">
            <h1>Our Services</h1>
            <p>At Kelly's Tech Solutions, we provide expert solutions to make your digital life easier. 
               Whether you need creative designs, software help, or system optimization, we deliver fast, reliable, 
               and affordable services tailored to your needs.
            </p>
            
            <h2> Software & Tech Support</h2>
        
            <h3>💾 Software & Game Installations</h3>
            <p>Struggling with setup? We handle:</p>
            <ul>
                <li>Software Installations (Windows, macOS, Linux)</li>
                <li>Game setups (PES, FIFA, NBA, COD, etc.)</li>
                <li>Application installations (Photoshop, Microsoft Office, etc.)</li>
                <li>Driver updates & compatibility fixes</li>
                <li>Anti-virus & security software setup</li>
            </ul>
            
            <h3>🔧 PC Troubleshooting & Repair</h3>
            <p>Is your computer slow, crashing, or acting up? We fix:</p>
            <ul>
                <li>Blue screen errors & system crashes</li>
                <li>Virus/malware removal</li>
                <li>Slow performance optimization</li>
                <li>Boot & startup issues</li>
            </ul>
            
            <h3>💽 Drive Partitioning & Data Management</h3>
            <p>Need better storage organization? We offer:</p>
            <ul>
                <li>Safe hard drive partitioning (without data loss)</li>
                <li>SSD/HDD optimization</li>
                <li>Backup solutions & data recovery</li>
            </ul>
            
            <h2>🎨 Graphic & Creative Design</h2>
            <h3>🖌️ Custom Graphic Design</h3>
            <p>Make your brand stand out with:</p>
            <ul>
                <li>Logos & branding kits</li>
                <li>Social media banners & ads</li>
                <li>Business cards & flyers</li>
                <li>YouTube thumbnails & stream overlays</li>
            </ul>
        </div>
    </body>
</html>