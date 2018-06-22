<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mathbirb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
  <link href="css/inloggen.css" rel="stylesheet" type="text/css"/>
</head>
<body>


  <!--Navbar--->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" style="color:#33ff33;" href="#">Mathbirb</a>
        </div>
        <ul class="nav navbar-nav">
          <li ><a href="mathbirb-Homepage.html">Home</a></li>
          <li ><a href="mathbirb-tafelpage.html">Tafels</a></li>
          <li ><a href="mathbirb-priempage.html">Priemgetallen</a></li>
          <li ><a href="mathbirb-inloggen.html">Login</a></li>
        </ul>
      </div>
    </nav>
<!--container-->
<div class="container">
  <div class="jumbotron">
    <h1 >MATHBIRB</h1>
    <img src="img/mathbirb.jpg" class="img-fluid" alt="Responsive image">
  </div>
  <!--PHPform-->
  <form action="mathbirb-inloggen.php" method="POST">
    <div class="container">
      <label for="uname"><b style="color:#33ff33;">Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname"/>

      <label for="psw"><b style="color:#33ff33;">Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button style="background-color:#33ff33;" type="submit">Login</button>
    </div>
  </form>
</div>



</body>
</html>
