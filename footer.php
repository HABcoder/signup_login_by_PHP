
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer | Your Brand</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --footer-bg: #2b2d42;
            --footer-text: #edf2f4;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        

        
        footer {
            background-color: var(--footer-bg);
            color: var(--footer-text);
            padding: 50px 0 20px;
            margin-top: 50px;
        }
        
        .footer-container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        
        .footer-col h3 {
            color: white;
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-col h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background: var(--accent-color);
        }
        
        .footer-col ul {
            list-style: none;
        }
        
        .footer-col ul li {
            margin-bottom: 10px;
        }
        
        .footer-col ul li a {
            color: var(--footer-text);
            text-decoration: none;
            opacity: 0.8;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .footer-col ul li a:hover {
            opacity: 1;
            color: var(--accent-color);
            transform: translateX(5px);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: var(--footer-text);
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .footer-bottom p {
            opacity: 0.7;
            font-size: 0.9rem;
        }
        
        .newsletter-form {
            display: flex;
            margin-top: 20px;
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 4px 0 0 4px;
            outline: none;
        }
        
        .newsletter-form button {
            background: var(--accent-color);
            color: white;
            border: none;
            padding: 0 15px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .newsletter-form button:hover {
            background: var(--primary-color);
        }
        
        @media (max-width: 768px) {
            .footer-container {
                grid-template-columns: 1fr 1fr;
            }
            
            .footer-col {
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 480px) {
            .footer-container {
                grid-template-columns: 1fr;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            .newsletter-form input,
            .newsletter-form button {
                border-radius: 4px;
                width: 100%;
            }
            
            .newsletter-form button {
                margin-top: 10px;
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    
    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h3>Your Brand</h3>
                <p style="opacity: 0.8; margin-bottom: 15px; line-height: 1.6;">
                    Empowering users with seamless authentication experiences across all platforms.
                </p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Authentication</h3>
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                    <li><a href="#">Forgot Password</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Newsletter</h3>
                <p style="opacity: 0.8; margin-bottom: 15px; line-height: 1.6;">
                    Subscribe to our newsletter for the latest updates and news.
                </p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your Email" required>
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2023 Your Brand. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>