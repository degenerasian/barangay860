<?php
session_start();
    require_once 'db_config.php';
    if(!$_SESSION['userid']){
        //print '<script>window.location.assign("index.php");</script>';   //  If not logged in, return to home
    }

    if(isset($_POST['apply_submit'])){
        $userid = $_POST['userid'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $curr_date = date("Y-m-d H:i:s");
        
        $doc_type = $_POST['doc_type'];

        if($doc_type == "Barangay Clearance"){
            $purpose = $_POST['purpose'];
            $tct = $_POST['tct'];
            $location = $_POST['location'];

            $query = "INSERT INTO document (doc_type, firstname, middlename, lastname, address, purpose, tct, location, application_date) VALUES ('$doc_type', '$firstname', '$middlename', '$lastname', '$address', '$purpose', '$tct', '$location', '$curr_date')";
            $result = mysqli_query($con, $query);
        }

        if ($doc_type == "Barangay ID") {
            $dob = $_POST['dateofbirth'];
            $gender = $_POST['gender'];
            $status = $_POST['idstatus'];
            $ec_name = $_POST['ec_name'];
            $ec_relationship = $_POST['ec_relationship'];
            $ec_address = $_POST['ec_address'];
            $ec_contact = $_POST['ec_contact'];
            $classification = $_POST['classification'];
            $contact_number = $_POST['phonenumber'];
            $employer_name = $_POST['employer_name'];
            $father_name = $_POST['father_name'];
            $mother_name = $_POST['mother_name'];
           
            $query = "INSERT INTO document (doc_type, firstname, middlename, lastname, dob, gender, address, status, ec_name, ec_relationship, ec_address, ec_contact, classification, contact_number, employer_name, father_name, mother_name, application_date) VALUES ('$doc_type', '$firstname', '$middlename', '$lastname', '$dob', '$gender', '$address','$status', '$ec_name', '$ec_relationship', '$ec_address', '$ec_contact', '$classification', '$contact_number', '$employer_name', '$father_name', '$mother_name', '$curr_date')";
            $result = mysqli_query($con, $query);
        }

        if ($doc_type == "Residency") {
            $status = $_POST['resstatus'];
            $requirement_for = $_POST['requirement_for'];
        
            $query = "INSERT INTO document (doc_type, firstname, middlename, lastname, address, status, requirement_for, application_date) VALUES ('$doc_type', '$firstname', '$middlename', '$lastname', '$address', '$status', '$requirement_for', '$curr_date')";
            $result = mysqli_query($con, $query);
        }
    }
        $last_id = $con->insert_id;
        $query = "INSERT INTO doc_request (approval, doc_id, userid) VALUES ('Pending', '$last_id', '$userid')";
        $result = mysqli_query($con, $query);
        
        print '<script>alert("Application Successful! Redirecting you to home page...");</script>';
        print '<script>window.location.assign("../index.php");</script>';
?>