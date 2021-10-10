<?php 

$servernameee = "91.134.193.97";
$usernameee = "srv_1088688_hqk";
$passworddd = "Wvr4nw3xF2B3x8kb";
$dbnameee = "srv_1088688_hqk";

// Create connection
$conn = mysqli_connect($servernameee, $usernameee, $passworddd, $dbnameee);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>