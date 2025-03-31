<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
    background-color:pink;
    }

    @keyframes floatAnimation {
        0% { transform: translateY(0); }
        40% { transform: translateY(-15px); }
        100% { transform: translateY(0); }
    }

    .login-container {
        background: #252525 !important;
        border-radius: 10%;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.8) !important;
        width: 350px;
        transition: background 0.5s ease;
        animation: floatAnimation 3s infinite ease-in-out;
    }

    
    .login-container:hover {
        background: linear-gradient(to bottom, #4b0082, #ff1493) !important;
    }

    .btn-primary {
        background: linear-gradient(to right, #6a11cb, #2575fc) !important;
        border: none !important;
    }

</style>
</head>

<body>

<div class="container login-container ">
    <form action="welcome.php" method="post">
        <table class="table table-dark mt-5 mx-auto w-auto">
            <tr>
                <th colspan="2"><h2 align="center">Login</h2></th>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="uname" id="name"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pwd" id="password"></td>
            </tr>
            <tr>
                <td align="right" colspan="2">
                    <input class="btn-primary" type="submit" name="login" value="login">
                </td>
            </tr>
        </table>
    </form>
</div>


</body>


<!--


If the form hasn't been submitted, $_POST['username'] may cause an error (Undefined index).

Always check if it exists before accessing.


$_POST['username'] retrieves the value from an HTML form input with name="username" (submitted via POST)                      




-->