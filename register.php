<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        /* Main form container */
        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        /* Title Styling */
        .form-container h1 {
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
            .form-container {
                width: 90%;
                padding: 30px;
            }

            .form-container h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Register</h1>
        <form action="./backend/register.php" method="post">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirm" class="form-control" placeholder="Masukkan konfirmasi password Anda" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
        </form>

        <!-- Footer -->
        <div class="form-footer">
            <p>Sudah punya akun? <a href="index.php">Login di sini</a></p>
        </div>
    </div>

    <!-- Link to Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
