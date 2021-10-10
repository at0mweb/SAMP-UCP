<?php
//Database Connection
$servername = "91.134.193.97";
$usernamedb = "srv_1088688_hqk";
$passworddb = "vtAdBln7OnWEwivQ";
$db="srv_1088688_hqk";
//Check Connection
$connect = new mysqli($servername, $usernamedb, $passworddb, $db);
if(!$conn){
 die ("Greska u konekciji sa bazom." . $connect->connect_error);
}
?>