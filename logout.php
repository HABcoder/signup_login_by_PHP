<?php 
include 'connection.php';
include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout | Your Brand</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
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
            height: 100%; 
            width : 100%;
        }    
        
        .logout-container {
            width: 90%;
            max-width: 500px;
            margin-top : 6%;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .logout-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 40px 20px;
        }
        
        .logout-header i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .logout-header h1 {
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        
        .logout-header p {
            opacity: 0.9;
            font-size: 0.9rem;
        }
        
        .logout-content {
            padding: 30px;
        }
        
        .logout-message {
            margin-bottom: 25px;
            color: var(--dark-color);
            line-height: 1.6;
        }
        
        .logout-actions {
            display: flex;
            gap: 15px;
            justify-content: center;
        }
        
        .btn {
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }
        
        .btn-secondary {
            background-color: white;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }
        
        .btn-secondary:hover {
            background-color: #f5f7ff;
            transform: translateY(-2px);
        }
        
        .logout-footer {
            padding: 20px;
            border-top: 1px solid #eee;
            font-size: 0.9rem;
            color: #777;
        }
        
        @media (max-width: 480px) {
            .logout-container {
                width: 95%;
            }
            
            .logout-header {
                padding: 30px 15px;
            }
            
            .logout-content {
                padding: 25px;
            }
            
            .logout-actions {
                flex-direction: column;
                gap: 10px;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
   <div class="main">
     <div class="logout-container">
              <div class="logout-header">
                         <i class="fas fa-sign-out-alt"></i>
                            <h1>Ready to Leave?</h1>
                     <p>Please confirm your logout</p>
               </div>
        
          <div class="logout-content">
                 <div class="logout-message">
                        <p>Are you sure you want to log out of your account?</p>
                         <p>You'll need to sign in again to access your dashboard.</p>
                 </div>
            
              <div class="logout-actions">
                     <form action="/logout" method="POST">
                            <button type="submit" class="btn btn-primary">Yes, Logout</button>
                    </form>
                   <a href="/dashboard" class="btn btn-secondary">Cancel</a>
             </div>
         </div>
        
             <div class="logout-footer">
                 <p>© 2023 Your Brand. All rights reserved.</p>
             </div>
      </div>
    </div>
    
</body>
</html>