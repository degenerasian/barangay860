<!DOCTYPE HTML>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"><!-- Favicon|image in web browser -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Document | Barangay 860</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <?php
        require_once 'services/db_config.php';
        session_start();

    if (!$_SESSION['userid']) {
        print '<script>window.location.assign("login.php");</script>'; //  If not logged in, return to home
    }
        require_once "modules/nav.php";
        get_navbar();

        $doc_id = $_GET['doc_id'];

        // create a query to get the doc and item details
        $query = "SELECT * FROM doc_request INNER JOIN document ON doc_request.doc_id = document.doc_id WHERE document.doc_id = $doc_id";
        $result = mysqli_query($con, $query);
        $doc = mysqli_fetch_assoc($result);

    ?>
<div class="container mt-5 w-50 main-container p-5">
    <h1 class="m-3 custom-title">Viewing Document <?php echo $doc['doc_id'] ?></h1>
    <h3 class="my-2 mx-3 custom-semi">Document Type: <?php echo $doc['doc_type']?></h2>
    <div class="row g-5">
        <div class="col">
            <form class="mx-3" method="post" action="services/approve-deny.php"> 
                <div class="mb-3">
                    <span class="mx-1">Document ID: <?php echo $doc['doc_id'] ?></span>
                </div>
                <hr/>
                <div class="mb-3">
                    <h4 class="custom-semi">Personal Details</h4>
                </div>
                <div class="row mb-3">
                <div class="col">
                    <label for="lastname" class="form-label">Last Name</label>
                    <h5><?php echo $doc['lastname']?></h5>
                </div>
                <div class="col">
                    <label for="firstname" class="form-label">First Name</label>
                    <h5><?php echo $doc['firstname']?></h5>
                </div>
                <div class="col">
                    <label for="middlename" class="form-label">Middle Name</label>
                    <h5><?php echo $doc['middlename']?></h5>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="address" class="form-label">Home Address</label>
                    <h5><?php echo $doc['address']?></h5>
                </div>
                <?php
                if ($doc['doc_type'] == 'Barangay Clearance') { 
                ?>
                <div class="row mb-3">
                    <div class="col">
                        <label for="purpose" class="form-label">Purpose</label>
                        <h5><?php echo $doc['purpose']?></h5>
                    </div>
                    <div class="col">
                        <label for="tct" class="form-label">Transfer Certificate of Title</label>
                        <h5><?php echo $doc['tct']?></h5>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="location" class="form-label">Location</label>
                    <h5><?php echo $doc['location']?></h5>
                </div>
                <?php } else if ($doc['doc_type'] == 'Barangay ID'){ ?>
                <div class="mb-3">
                    <label for="contact_number" class="form-label">Contact Number</label>
                    <h5><?php echo $doc['contact_number']?></h5>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-xl-6">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <h5><?php echo $doc['dob']?></h5>
                    </div>
                    <div class="col-xl-3">
                        <label for="gender" class="form-label">Gender</label>
                        <h5><?php echo $doc['gender']?></h5>
                    </div>
                    <div class="col-xl-3">
                        <label for="status" class="form-label">Civil Status</label>
                        <h5><?php echo $doc['status']?></h5>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="employer_name" class="form-label">Employer's Name</label>
                    <h5><?php echo $doc['employer_name']?></h5>
                </div>
                <hr/>
                <div class="mb-3">
                    <h4 class="custom-semi">Parent Details</h4>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="mother_name" class="form-label">Mother's Name</label>
                        <h5><?php echo $doc['mother_name']?></h5>
                    </div>
                    <div class="col">
                        <label for="father_name" class="form-label">Father's Name</label>
                        <h5><?php echo $doc['father_name']?></h5>
                    </div>
                </div>
                <hr/>
                <div class="mb-3">
                    <h4 class="custom-semi">Emergency Contact Details</h4>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-xl-5">
                        <label for="ec_name" class="form-label">Name</label>
                        <h5><?php echo $doc['ec_name']?></h5>
                    </div>
                    <div class="col-xl-4">
                        <label for="ec_relationship" class="form-label">Relationship</label>
                        <h5><?php echo $doc['ec_relationship']?></h5>
                    </div>
                    <div class="col-xl-3">
                        <label for="ec_contact" class="form-label">Contact Number</label>
                        <h5><?php echo $doc['ec_contact']?></h5>
                    </div>
                    <div class="mb-3">
                        <label for="ec_address" class="form-label">Address</label>
                        <h5><?php echo $doc['ec_address']?></h5>
                    </div>
                </div>
                <hr/>
                <div class="mb-3">
                    <h4>Classification</h4>
                    <h5><?php echo $doc['classification']?></h5>
                </div>
                <?php } else if ($doc['doc_type'] == 'Residency'){ ?>
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="status" class="form-label mx-1">Civil Status</label>
                        <h5><?php echo $doc['status']?></h5>
                    </div>
                    <div class="col-8">
                        <label for="requirement_for" class="form-label">Requirement For: </label>
                        <h5><?php echo $doc['requirement_for']?></h5>
                    </div>
                </div>
                <?php } ?>
                  <div class="row justify-content-md-center g-3 mb-3">
                    <div class="col col-lg-4">
                        <a role="button" name='back' href="documents.php" class="btn btn-secondary custom-semi w-100">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>