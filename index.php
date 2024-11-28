<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* General body styling */
        body {
            background-color: #f0f8ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        /* Main login container */
        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Title Styling */
        .login-container h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Form input styling */
        .form-group input {
            border-radius: 10px;
            padding: 14px;
            font-size: 16px;
            width: 100%;
            border: 2px solid #ddd;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 10px rgba(108, 99, 255, 0.5);
            outline: none;
        }

        /* Submit button styling */
        .btn-primary {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            background-color: #6c63ff;
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #4e46b5;
            cursor: pointer;
        }

        /* Footer styling */
        .form-footer {
            margin-top: 20px;
        }

        .form-footer p {
            font-size: 14px;
            color: #777;
        }

        .form-footer a {
            color: #6c63ff;
            text-decoration: none;
            font-weight: 600;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Mobile responsiveness */
        @media (max-width: 600px) {
            .login-container {
                width: 90%;
                padding: 30px;
            }

            .login-container h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="./backend/login.php" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login" name="submit" class="btn btn-primary">
            </div>
        </form>

        <!-- Footer -->
        <div class="form-footer">
            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
        </div>
    </div>

    <!-- Link to Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
