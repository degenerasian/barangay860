<?php
session_start();
    //  Init POST variables from home.php register form
    require_once 'db_config.php';
    
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $civilstatus = $_POST['civilstatus'];
    $address = $_POST['address'];
    $dateofbirth = $_POST['dateofbirth'];
    $phonenumber = $_POST['phonenumber'];
    $telephonenumber = $_POST['telephonenumber'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $bool = true;

    $firstname = mysqli_real_escape_string($con, $firstname);
    $middlename = mysqli_real_escape_string($con, $middlename);
    $lastname = mysqli_real_escape_string($con, $lastname);
    $gender = mysqli_real_escape_string($con, $gender);
    $civilstatus = mysqli_real_escape_string($con, $civilstatus);
    $address = mysqli_real_escape_string($con, $address);
    $dateofbirth = mysqli_real_escape_string($con, $dateofbirth);
    $phonenumber = mysqli_real_escape_string($con, $phonenumber);
    $telephonenumber = mysqli_real_escape_string($con, $telephonenumber);
    $email = mysqli_real_escape_string($con, $email);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT username FROM accounts";
    $results = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($results)){
        $table_users = $row['username'];
        if($username == $table_users) {
            $bool = false;
            print '<script>alert("Username is taken");</script>';
            print '<script>window.location.assign("register.php");</script>';
        }
    }
    if($bool){
        mysqli_query($con, "INSERT INTO accounts (firstname, middlename, lastname, gender, civilstatus, address, dateofbirth, phonenumber, telephonenumber, email, username, password, privilege) VALUES ('$firstname', '$middlename', '$lastname', '$gender', '$civilstatus', '$address', '$dateofbirth', '$phonenumber', '$telephonenumber', '$email', '$username', '$password', 'User')");
        print '<script>alert("Register Successful");</script>';
        print '<script>window.location.assign("../index.php");</script>';
    }
?>

