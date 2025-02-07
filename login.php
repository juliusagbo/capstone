<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EcoFinance</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #1a1a1a;
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            background-color: #2d2d2d;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #f1c40f;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #f1c40f;
            font-size: 16px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            background-color: #3d3d3d;
            border: 2px solid #4d4d4d;
            border-radius: 6px;
            color: #ffffff;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #f1c40f;
            box-shadow: 0 0 10px rgba(241, 196, 15, 0.2);
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #f1c40f;
            color: #1a1a1a;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background-color: #d4ac0d;
            transform: translateY(-2px);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }

        .forgot-password a {
            color: #f1c40f;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        ::placeholder {
            color: #888888;
        }

        .error-message {
            color: #ff4444;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login to EcoFinance</h1>
        <form id="loginForm" action="process_login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    placeholder="Enter your username"
                    required
                >
                <div class="error-message">Please enter your username</div>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="phone" 
                    placeholder="Enter your phone number"
                    pattern="[0-9]{11}"
                    required
                >
                <div class="error-message">Please enter a valid phone number</div>
            </div>

            <button type="submit" class="btn-login">Login</button>

            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your login logic here
            alert('Login successful!');
            this.reset();
        });

        // Basic validation
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('invalid', function(e) {
                e.preventDefault();
                this.classList.add('error');
                this.nextElementSibling.style.display = 'block';
            });

            input.addEventListener('input', function() {
                this.classList.remove('error');
                this.nextElementSibling.style.display = 'none';
            });
        });
    </script>
</body>
</html>
