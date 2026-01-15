<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "localhost";
$username = "ensawirm_film";
$password = "admin321470";
$db = "ensawirm_film";

//create connection
$conn = new mysqli($servername,$username,$password,$db);

//check connection
if($conn->connect_error){
	die("Connection failed : ".$conn->connect_error);
}

//echo "Connected successfully<hr>";
?>