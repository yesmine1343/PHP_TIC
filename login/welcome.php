<!-- page 2 -->
<?php
session_start();
include 'header.php';
$uname='admin';
$pwd='yname';
echo"<div class='container w-container' >" ;

if (!isset($_SESSION["user"])){
    if (!isset($_COOKIE['stay'])){
        $_SESSION['user']=$_COOKIE['stay'];
    }
}
if (isset($_SESSION['uname']) and (!empty($_SESSION['uname']))) {  //user is connected
    echo "<h1> GAME ON " .  strtoupper($_SESSION['uname'])."</h1><br>";
    //echo "<script>location.href='gamestart.php'</script><br>"; js is executed first so it interrupts the rest of PHP code(executed on server but user wont see it)
    // inspecter application cookies (dev mode)
    //if theres no session if isset of cookie then start session
    //rename this page to dashboard
    if (isset($_POST['resterconnectee'])) {
        setcookie('resterconnectée','stay',time());
    } 
    echo"<div style='position: absolute; bottom: 320;'>
    <form class='form-group' action='gamestart.php' method='GET'>
        <button type='submit' value='GAME START' class='btn-primary'>GAME START</button>
    </form><br></div>    
    "."<br>";      
    echo "<div style='position: absolute; bottom: 290;'><form action='logout.php'><button type='submit' value='logout' class='btn-primary'>logout</button></form></div>";
echo"</div>";

} else { //user not connected
    echo"<div class='container ' >" ;
    if ($_POST['uname'] == $uname && $_POST['pwd'] == $pwd) { //if uname entered by user matches our static uname ($_POST) 
        $_SESSION['uname'] = $uname;   //then save uname in global tab
        echo "<script>location.href='welcome.php'</script>";//redirection 
    } else {
        echo "<script>alert('username or password incorrect!')</script>"; //like js
        echo "<script>location.href='login.php'</script>";//redirection
    }
    echo"</div>";//div div/2
}   
?>