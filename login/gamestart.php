<?php
    session_start();
    include 'header.php';
    if(isset($_SESSION['uname'])){
    echo "<h2>Welcome to Product page</h2>";
  //echo "<br><a href='dashboard.php'><input type=button name=back value=back></a>";
    }
    else{
    echo "<script>location.href='login.php'</script>";
}


/* 
rq :
innerHTML: When you use innerHTML,
 you can also add special things like links and pictures. So if you say, "Here's a link: <a href='...'>Click here</a>," the page will make it clickable.

innerText: If you use innerText, it will just
 show "Here's a link: <a href='...'>Click here</a>" as regular text without making it clickable.


*/ 
?>