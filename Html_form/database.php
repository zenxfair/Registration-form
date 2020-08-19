<?php
// set database connection
$conn=mysqli_connect("localhost","root","","student");
// chack database connection
if (!$conn) {
	die("Database Not Connected!");
}

?>