<?php
$server_name = "localhost";
//$username = "id20480500_root";
//$passWord = "MAokv-U32|!tye#o";
//$dbname = 'id20480500_resgistration';
$username="root";
$passWord="";
$dbname="reg";
// Create connection
$mysqli = new mysqli($server_name, $username, $passWord, $dbname);
// Check connection
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}


?>