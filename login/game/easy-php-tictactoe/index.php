<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TicTacToe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1 class="text-center">X--O--TicTacToe--X--O</h1>
        <h3 class="text-center">TicTacToe-Game made with PHP</h3>
      </div>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <form action="game.php" method="post">
            <div class="form-group">
              <label for="name1">PLAYER  1</label>
              <input class="form-control" type="text" name="name1" id='name1'>
            </div>
            <div class="form-group">
              <label for="name2">PLAYER 2</label>
              <input class="form-control" type="text" name="name2" id='name2'>
            </div>
            <input class="form-control btn btn-primary" type="submit" name="Send" value="Send">
          </form> 
        </div>
      </div>
    </div>
  </body>
</html>
