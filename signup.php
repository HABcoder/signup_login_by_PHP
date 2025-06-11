<?php 
include 'connection.php';
include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Your Brand</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color:   #3498db;
            --accent-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4bb543;
            --error-color: #ff3333;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            height: 100%; 
            width : 100%;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(67, 97, 238, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(76, 201, 240, 0.1) 0%, transparent 20%);
        }
        .main {
             background-color:rgb(225, 232, 243);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%; 
            width : 100%;
        }       
        .signup-container {
            width: 95%;
            height: 80%;
            margin-top : 20px;
            max-width: 620px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(52, 152, 219, 0.28);
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .signup-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 20px 20px;
            text-align: center;
        }
        
        .signup-header h1 {
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        
        .signup-header p {
            opacity: 0.9;
            font-size: 0.9rem;
        }
        
        .signup-form {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-color);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
            padding-left: 40px;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
            outline: none;
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50px;
            color: #777;
        }
        
        .password-strength {
            margin-top: 5px;
            height: 4px;
            background-color: #eee;
            border-radius: 2px;
            overflow: hidden;
        }
        
        .strength-meter {
            height: 100%;
            width: 0;
            background-color: var(--error-color);
            transition: width 0.3s, background-color 0.3s;
        }
        
        .terms-conditions {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        
        .terms-conditions input {
            margin-right: 10px;
            margin-top: 3px;
        }
        
        .terms-conditions a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }
        
        .terms-conditions a:hover {
            text-decoration: underline;
        }
        
        .signup-btn1 {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        
        .signup-btn1:hover {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 10px 0;
            color: #777;
            font-size: 0.9rem;
        }
        
        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #ddd;
        }
        
        .divider::before {
            margin-right: 10px;
        }
        
        .divider::after {
            margin-left: 10px;
        }
        
        .social-signup {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .social-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .social-btn:hover {
            transform: translateY(-3px);
        }
        
        .facebook {
            background-color: #3b5998;
        }
        
        .google {
            background-color: #db4437;
        }
        
        .twitter {
            background-color: #1da1f2;
        }
        
        .login-link {
            text-align: center;
            font-size: 0.9rem;
        }
        
        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 480px) {
            .signup-container {
                width: 95%;
            }
            
            .signup-header {
                padding: 25px 15px;
            }
            
            .signup-form {
                padding: 25px;
            }
            
            .social-signup {
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="main">
            <div class="signup-container">
        <div class="signup-header">
            <h1>Create Account</h1>
            <p>Join our community today</p>
        </div>
        
        <form class="signup-form">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <i class="fas fa-user input-icon"></i>
                <input type="text" id="fullname" class="form-control" placeholder="Enter your full name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <i class="fas fa-envelope input-icon"></i>
                <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <i class="fas fa-lock input-icon"></i>
                <input type="password" id="password" class="form-control" placeholder="Create a password" required>
                <div class="password-strength">
                    <div class="strength-meter" id="strength-meter"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <i class="fas fa-lock input-icon"></i>
                <input type="password" id="confirm-password" class="form-control" placeholder="Confirm your password" required>
            </div>
            
            <div class="terms-conditions">
                <input type="checkbox" id="terms" required>
                <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
            </div>
            
            <button type="submit" class="signup-btn1">Sign Up</button>
            
            <div class="divider">or sign up with</div>
            
            <div class="social-signup">
                <div class="social-btn facebook">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="social-btn google">
                    <i class="fab fa-google"></i>
                </div>
                <div class="social-btn twitter">
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            
            <div class="login-link">
                Already have an account? <a href="login.html">Log in</a>
            </div>
        </form>
    </div>
    </div>
    

    <script>
        // Password strength indicator
        const passwordInput = document.getElementById('password');
        const strengthMeter = document.getElementById('strength-meter');
        
        passwordInput.addEventListener('input', function() {
            const password = passwordInput.value;
            let strength = 0;
            
            // Check for length
            if (password.length >= 8) strength += 1;
            if (password.length >= 12) strength += 1;
            
            // Check for uppercase letters
            if (/[A-Z]/.test(password)) strength += 1;
            
            // Check for numbers
            if (/[0-9]/.test(password)) strength += 1;
            
            // Check for special characters
            if (/[^A-Za-z0-9]/.test(password)) strength += 1;
            
            // Update strength meter
            const width = strength * 20;
            let color = var(--error-color);
            
            if (strength >= 4) {
                color = var(--success-color);
            } else if (strength >= 2) {
                color = '#ffcc00';
            }
            
            strengthMeter.style.width = `${width}%`;
            strengthMeter.style.backgroundColor = color;
        });
        
        // Confirm password validation
        const confirmPassword = document.getElementById('confirm-password');
        
        confirmPassword.addEventListener('input', function() {
            if (confirmPassword.value !== passwordInput.value) {
                confirmPassword.setCustomValidity("Passwords don't match");
            } else {
                confirmPassword.setCustomValidity('');
            }
        });
    </script>
</body>
</html>