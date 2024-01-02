<?php
session_start();
    require_once 'db_config.php';
    if(!$_SESSION['userid']){
        print '<script>window.location.assign("index.php");</script>';   //  If not logged in, return to home
    }
    if(!$_SESSION['privilege'] == 'Admin'){
        print '<script>alert("You are not authorized to access this page!");</script>';
        print '<script>window.location.assign("index.php");</script>';   //  If not admin, return to home
    }
    $doc_id = $_POST['doc_id'];

    $query = "SELECT * from doc_request INNER JOIN document ON doc_request.doc_id = document.doc_id WHERE document.doc_id='$doc_id'";
    $results = mysqli_query($con, $query);
    $exists = mysqli_num_rows($results);

    if(isset($_POST['approve_submit']) || isset($_POST['deny_submit']) || isset($_POST['pending_submit'])){
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        
        $firstname = mysqli_real_escape_string($con, $firstname);
        $middlename = mysqli_real_escape_string($con, $middlename);
        $lastname = mysqli_real_escape_string($con, $lastname);
        $address = mysqli_real_escape_string($con, $address);

        $query = "UPDATE document SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', address = '$address' WHERE doc_id = $doc_id";
        $result = mysqli_query($con, $query);   

        $doc_type = $_POST['doc_type'];

        if($doc_type == "Barangay Clearance"){
            $purpose = $_POST['purpose'];
            $tct = $_POST['tct'];
            $location = $_POST['location'];

            $purpose = mysqli_real_escape_string($con, $purpose);
            $tct = mysqli_real_escape_string($con, $tct);
            $location = mysqli_real_escape_string($con, $location);
            
            
            $query = "UPDATE document SET purpose = '$purpose', tct = '$tct', location = '$location' WHERE doc_id = $doc_id";
            $result = mysqli_query($con, $query);   
        }

        if ($doc_type == "Barangay ID") {
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $status = $_POST['status'];
            $ec_name = $_POST['ec_name'];
            $ec_relationship = $_POST['ec_relationship'];
            $ec_address = $_POST['ec_address'];
            $ec_contact = $_POST['ec_contact'];
            $classification = $_POST['classification'];
            $contact_number = $_POST['contact_number'];
            $employer_name = $_POST['employer_name'];
            $father_name = $_POST['father_name'];
            $mother_name = $_POST['mother_name'];

            $dob = mysqli_real_escape_string($con, $dob);
            $gender = mysqli_real_escape_string($con, $gender);
            $status = mysqli_real_escape_string($con, $status);
            $ec_name = mysqli_real_escape_string($con, $ec_name);
            $ec_relationship = mysqli_real_escape_string($con, $ec_relationship);
            $ec_address = mysqli_real_escape_string($con, $ec_address);
            $ec_contact = mysqli_real_escape_string($con, $ec_contact);
            $classification = mysqli_real_escape_string($con, $classification);
            $contact_number = mysqli_real_escape_string($con, $contact_number);
            $employer_name = mysqli_real_escape_string($con, $employer_name);
            $father_name = mysqli_real_escape_string($con, $father_name);
            $mother_name = mysqli_real_escape_string($con, $mother_name);

           
            $query = "UPDATE document SET dob = '$dob', gender = '$gender', status = '$status', ec_name = '$ec_name', ec_relationship = '$ec_relationship', ec_address = '$ec_address', ec_contact = '$ec_contact', classification = '$classification', contact_number = '$contact_number', employer_name = '$employer_name', father_name = '$father_name', mother_name = '$mother_name', WHERE doc_id = $doc_id";
            $result = mysqli_query($con, $query);
        }

        if ($doc_type == "Residency") {
            $status = $_POST['status'];
            $requirement_for = $_POST['requirement_for'];

            $status = mysqli_real_escape_string($con, $status);
            $requirement_for = mysqli_real_escape_string($con, $requirement_for);
        
            $query = "UPDATE document SET status = '$status', requirement_for = '$requirement_for' WHERE doc_id = $doc_id";
            $result = mysqli_query($con, $query);  
        }
    }

    if(isset($_POST['approve_submit'])){
        $query = "UPDATE doc_request SET approval = 'Approved' WHERE doc_id = $doc_id";
        $result = mysqli_query($con, $query);
    }
    
    if(isset($_POST['deny_submit'])){
        $query = "UPDATE doc_request SET approval = 'Denied' WHERE doc_id = $doc_id";
        $result = mysqli_query($con, $query);
    }

    if(isset($_POST['pending_submit'])){
        $query = "UPDATE doc_request SET approval = 'Pending' WHERE doc_id = $doc_id";
        $result = mysqli_query($con, $query);
    }
    print '<script>window.location.assign("../docAppDis.php");</script>';   //  If not logged in, return to home
?>