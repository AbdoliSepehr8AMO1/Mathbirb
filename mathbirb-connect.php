<?php
// Inloggegevens van de database invoeren
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mathbirb";

// Brengt de verbinding met database tot stand
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checkt of de verbinding tot stand gebracht is
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
