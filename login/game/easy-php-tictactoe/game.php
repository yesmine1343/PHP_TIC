<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
      <!--CDNs host external files, so you’re trusting a third party to serve the right content.

        integrity checks the file’s hash to ensure it hasn’t been tampered with during transfer.

        Since it’s a cross-origin request (from a CDN), crossorigin="anonymous" is needed for the browser to verify the integrity.

        Without these, you lose a layer of security when loading external resources from a CDN. -->
    <?php session_start(); ?>
    <style> //media="screen"
      td a {
        display:block;
        width:100%;
        height: 100%;
    }
    </style>
  </head>
  <!-- td a  display:block;
        width:100%;
        height: 100%; This ensures that links in table cells occupy the entire cell 
        — useful for clicking on any part of the cell during gameplay. -->
  <body>
    <?php//////////////////
    if (isset($_POST["Send"])) {
      $_SESSION["names"][1] = $_POST["name1"];
      $_SESSION["matrix"] = array(
        8 => 0,
        1 => 0,
        6 => 0,
        3 => 0,
        5 => 0,
        7 => 0,
        4 => 0,
        9 => 0,
        2 => 0);
      $_SESSION["names"][2] = $_POST["name2"];
      $_SESSION["activeplayer"] = "";
    }
    if (!isset($_SESSION["names"][1])) {
      header("Location: index.php");  //header 
      die();                          //why die
    }
      if (isset($_GET["zug"])) {
        $player = $_GET["player"];
        $zug = $_GET["zug"];
        $_SESSION["matrix"][$zug] = $player;
      }
    ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <?php
            echo "<h1>"; /////////////////////////////
            echo "Playing " . $_SESSION["names"][1] . " VS " . $_SESSION["names"][2];
            echo "</h1>";
            if ($_SESSION["activeplayer"] == "") {
              $_SESSION["activeplayer"] = rand(1,2);
            }
            if (isset($_GET["zug"])) {      //get from where 
              if (!isset($_SESSION["lastzug"])) { //lastzug what 
                $_SESSION["lastzug"] = $_GET["zug"];
              }
              
            }

            if ($_SESSION["activeplayer"] == 1) {
              $_SESSION["activeplayer"] = 2;
            }
            else {
              $_SESSION["activeplayer"] = 1;
            }
            echo "<h1>";
            echo "<small>PLAYER " . $_SESSION["activeplayer"] . " YOUR TURN!</small>";
            echo "</h1>";
            $playerpoints[1] = array();
            $playerpoints[2] = array();
            foreach ($_SESSION["matrix"] as $key => $value) {
              if ($value == 1) {
                $playerpoints[1][] = $key;
              }
              if ($value == 2) {
                $playerpoints[2][] = $key;
              }
            }
            for ($i=1; $i < 3; $i++) {
              foreach ($playerpoints[$i] as $key1 => $val1) {
                foreach ($playerpoints[$i] as $key2 => $val2) {
                  foreach ($playerpoints[$i] as $key3 => $val3) {
                    if ($val1 != $val2 && $val1 != $val3 && $val2 != $val3) {
                      if ($val1 + $val2 + $val3 == 15) {
                        echo "<div class='alert alert-success'> <strong>WINNER IS : </strong>".$_SESSION["names"][$i]."!</div>";
                        echo "<br><a href='index.php'>Go Back to Index</a>";
                        die();
                      }
                    }
                  }
                }
              }
            }
            if (!in_array(0,$_SESSION["matrix"])) {
              echo "<div class='alert alert-danger'> <strong>End of game </strong>The board is full!</div>";
              echo "<br><a href='index.php'>Go Back to Index</a>";
              die();
            }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <table border class="">
            <?php
              $matrixArray = array(8,1,6,3,5,7,4,9,2,0);
              $matrixCounter = 0;
              $matrixPointer = $matrixArray[$matrixCounter];
              for ($i=0; $i < 3; $i++) {
                if ($i != 0) {
                  echo "</tr>";
                }
                if ($i != 3) {
                  echo "<tr>";
                }
                for ($i1=0; $i1 < 3; $i1++) {
                  if ($_SESSION["matrix"][$matrixPointer] == 0) {
                    echo "<td onclick=\"location.href = 'game.php?zug=$matrixPointer&player=" . $_SESSION["activeplayer"] . "'\">";
                  }
                  else {
                    echo "<td>";
                    $owner = $_SESSION["matrix"][$matrixPointer];
                    if ($owner == 1) {
                      echo "<img src='img/circle.png'>";
                    }
                    else {
                      echo "<img src='img/cross.png'>";
                    }
                  }
                  echo "</td>";
                  $matrixCounter++;
                  $matrixPointer = $matrixArray[$matrixCounter];
                }
              }
             ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
