<?php 
// include databade connection
require_once "database.php";

if (isset($_GET['delete'])) {


	// recived id and delete 
	$id=base64_decode($_GET['delete']);
	$result=mysqli_query($conn,"DELETE FROM `student_reg` WHERE `id`='$id'");

	// chack and retune file
	if ($result) {
		header('location: show_all_reg.php')
	}
}
?>