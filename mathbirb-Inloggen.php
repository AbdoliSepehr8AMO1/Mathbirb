<?php

$vnaamerr = $pswerr = "";
$vnaam = $psw =  "";
if ($_SERVER['REQUEST_METHOD'] =='POST'){
  if(empty($_POST['vnaam']))
  {
    $vnaamerr = "voornaam is een verplicht veld";
  }
  else{
    $vnaam = $_POST["vnaam"];
  }

  if(empty($_POST['psw']))
  {
    $pswerr = "telefoonummer is een verplicht veld";
  }
  else{
    $psw = $_POST["psw"];
  }
}

if($vnaamerr == "" && $pswerr == ""){
	require('mathbirb-connect.php');
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $submitusername = $_POST['uname'];
    $submitpassword = ($_POST['psw']);

	function test_input($data){
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	$vnaam = test_input($vnaam);
  $psw = test_input($psw);
	$vnaam = mysqli_real_escape_string($conn,$vnaam);
  $psw = mysqli_real_escape_string($conn,$psw);

  $query = "SELECT * FROM login WHERE username = '$submitusername' AND password = '$submitpassword'";
  $result = mysqli_query($conn,$query);

  if(!$result){
    die("Query niet gelukt");
  }
  $aantal = mysqli_num_rows($result);
  if($aantal == 1){
    session_start();
    $user = mysqli_fetch_row($result);
    $_SESSION['ingelogd'] = "ja";
    $_SESSION['username'] = $user[1];
    header('Location: success.php');
  }
  else {
    header("Location: mathbirb-inloggen.php");
  }
}
  else{
  header("Location: mathbirb-inloggen.php");
}
}


?>
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
      <input type="text" placeholder="Enter Username" name="uname" value="<?php echo $uname;?>"/>
      <span class="left"> <?php echo $vnaamerr;?></span><br>

      <label for="psw"><b style="color:#33ff33;">Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" value="<?php echo $psw;?>"/>>
      <span class="left"> <?php echo $pswerr;?></span><br>


      <button style="background-color:#33ff33;" type="submit" value="login">Login</button>
    </div>
  </form>
</div>



</body>
</html>
