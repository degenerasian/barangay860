<?php
session_start();
require_once 'db_config.php';

if(!$_SESSION['userid']){
        print '<script>window.location.assign("login.php");</script>';   //  If not logged in, return to home
    }
    if(!$_SESSION['privilege'] == 'Admin'){
        print '<script>alert("You are not authorized to access this page!");</script>';
        print '<script>window.location.assign("index.php");</script>';   //  If not admin, return to home
    }
	$sql = "DELETE FROM brgy_off WHERE official_id='" . $_GET["officialid"] . "'";
if (mysqli_query($con, $sql)) {
	print '<script>alert("Official successfully deleted!");</script>';
	header("Location: ../view-officials.php");
	exit(); 
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
?>