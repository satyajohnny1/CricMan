<?php
/*
$servername = "localhost";
$username = "root";
$password = "infy";
$dbname = "tolly_hit";



$servername = "mysql.hostinger.in";
$username = "u351245516_admin";
$password = "123abcABC@";
$dbname = "u351245516_hit";


$servername = "sql111.epizy.com";
$username = "epiz_17259702";
$password = "123abcABC";
$dbname = "epiz_17259702_hit";

*/


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cricdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	
}
