<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application - LoanEase</title>
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

        .application-container {
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

        .btn-submit {
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

        .btn-submit:hover {
            background-color: #d4ac0d;
            transform: translateY(-2px);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Input placeholder color */
        ::placeholder {
            color: #888888;
        }

        /* Error state */
        .form-group input.error {
            border-color: #ff4444;
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
    <div class="application-container">
        <h1>Register Account</h1>
        <form id="loanApplication" action="process_application.php" method="POST">
            <div class="form-group">
                <label for="username">Full Name</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    placeholder="Enter your full name"
                    required
                >
                <div class="error-message">Please enter a valid name</div>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input 
                    type="tel" 
                    id="mobile" 
                    name="mobile" 
                    placeholder="Enter your mobile number"
                    pattern="[0-9]{10}"
                    required
                >
                <div class="error-message">Please enter a valid mobile number</div>
            </div>

            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('loanApplication').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your form submission logic here
            alert('Application submitted successfully!');
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
