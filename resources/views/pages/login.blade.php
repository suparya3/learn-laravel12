<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #6c757d;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #2575fc;
            border: none;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: #6a11cb;
        }

        .social-login-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .social-login-buttons a {
            text-decoration: none;
            border-radius: 50%;
            padding: 10px;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ddd;
            transition: background-color 0.3s;
        }

        .social-login-buttons a:hover {
            background-color: #6a11cb;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-link a {
            text-decoration: none;
            color: #2575fc;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login to Your Account</h2>
        <form action="#" method="POST">
            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <div class="text-center mt-3">
            <p>or login with</p>
            <div class="social-login-buttons">
                <a href="#" class="facebook-btn">
                    <i class="fab fa-facebook-f text-white"></i>
                </a>
                <a href="#" class="google-btn">
                    <i class="fab fa-google text-white"></i>
                </a>
                <a href="#" class="twitter-btn">
                    <i class="fab fa-twitter text-white"></i>
                </a>
            </div>
        </div>

        <div class="register-link">
            <p>Don't have an account? <a href="/register">Register here</a></p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
