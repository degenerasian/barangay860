<?php
session_start();
require_once "db_config.php";

if (isset($_POST['submit'])) {
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$mname = $_POST['middlename'];
	$gender = $_POST['gender'];
	$civilstatus = $_POST['civilstatus'];
	$address = $_POST['address'];
	$dateofbirth = $_POST['dateofbirth'];
	$phoneno = $_POST['phoneno'];
	$telno = $_POST['telno'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "UPDATE accounts SET username = '".$username."', password = '".$password."', firstname = '".$fname."', middlename = '".$mname."', lastname = '".$lname."', gender = '".$gender."', civilstatus = '".$civilstatus."', address = '".$address."', dateofbirth = '".$dateofbirth."', phonenumber = '".$phoneno."', telephonenumber = '".$telno."', email = '".$email."' WHERE userid = '".$_SESSION["userid"]."';";

	if (mysqli_query($con, $query)) {
		header("Location: ../index.php");
		exit(); 
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}
}
?>