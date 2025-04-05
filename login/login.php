<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: pink;
        }

        @keyframes floatAnimation {
            0% { transform: translateY(0); }
            40% { transform: translateY(-15px); }
            100% { transform: translateY(0); }
        }

        .login-container {
            background: pink !important;
            border-radius: 10%;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.8) !important;
            width: 720px; /* Reduced by 20% (previously 900px) */
            padding: 48px; /* Reduced padding */
            margin: 50px auto; /* Centered with margin */
            transition: background 0.5s ease;
            animation: floatAnimation 3s infinite ease-in-out;
            min-height: 400px; /* Reduced height */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container:hover {
            background: linear-gradient(to bottom, #4b0082, #ff1493) !important;
        }

        .btn-primary {
            background: linear-gradient(to right, #6a11cb, #2575fc) !important;
            border: none !important;
        }

        /* Make black table bigger */
        table {
            width: 80%; /* Increased width */
            margin: auto;
        }

        /* Keep input fields at normal size */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

    </style>
</head>

<body>

<div class="container-fluid mt-3 mb-3 login-container">
    <form action="welcome.php" method="post">
        <table class="table table-dark">
            <tr>
                <th colspan="2"><h2 class="text-center">Login</h2></th>
            </tr>
            <tr>
                <td><strong>Username:</strong></td>
                <td><input type="text" name="uname" id="name"></td>
            </tr>
            <tr>
                <td><strong>Password:</strong></td>
                <td><input type="password" name="pwd" id="password"></td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input class="btn btn-primary w-100" type="submit" name="login" value="Login">
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
