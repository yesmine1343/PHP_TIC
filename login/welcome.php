<?php
session_start();
include 'header.php';
$uname='admin';
$pwd='yname';
echo"<div class='container mt-5 login-container login-container-hover '>" ;
if (isset($_SESSION['uname']) and (!empty($_SESSION['uname']))) {
    echo "<h1> Welcome...Game on </h1>" . $_SESSION['uname']."<br>";
    echo "<a href='product.php'>Product</a><br>";
    echo "<br><a href='logout.php'><input type='button' class='btn-primary' value='logout' name='logout'></a>";
} else {
    if ($_POST['uname'] == $uname && $_POST['pwd'] == $pwd) {
        $_SESSION['uname'] = $uname;
        echo "<script>location.href='welcome.php'</script>";
    } else {
        echo "<script>alert('username or password incorrect!')</script>";
        echo "<script>location.href='login.php'</script>";
    }
} echo"</div>"
?>