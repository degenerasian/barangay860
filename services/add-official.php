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

    if(isset($_POST['edit_off'])){
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
		
        if ($_POST['image'] == '') {
            $image = "img/no_pic.webp";
        } else {
            $image = "img/" . $_POST['image'];
        }
		
        $position = $_POST['position'];
        $suffix = $_POST['suffix'];
        $barangay = $_POST['barangay'];
        $email = $_POST['email'];
        $mobile_number = $_POST['mobile_number'];

        $firstname = mysqli_real_escape_string($con, $firstname);
        $middlename = mysqli_real_escape_string($con, $middlename);
        $lastname = mysqli_real_escape_string($con, $lastname);
        $image = mysqli_real_escape_string($con, $image);
        $position = mysqli_real_escape_string($con, $position);
        $suffix = mysqli_real_escape_string($con, $suffix);
        $barangay = mysqli_real_escape_string($con, $barangay);
        $email = mysqli_real_escape_string($con, $email);
        $mobile_number = mysqli_real_escape_string($con, $mobile_number);

        $query = "INSERT INTO brgy_off (firstname, middlename, lastname, image, position, barangay, suffix, email, mobile_number) VALUES('$firstname', '$middlename','$lastname', '$image', '$position', '$barangay', '$suffix', '$email', '$mobile_number')";
        $result = mysqli_query($con, $query);
    }
        
        print '<script>alert("Add Successful! Redirecting you to the officials page...");</script>';
        print '<script>window.location.assign("../view-officials.php");</script>';
?>