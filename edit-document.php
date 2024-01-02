<!DOCTYPE HTML>
<html lang='en'>
<head>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"><!-- Favicon|image in web browser -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Document | Barangay 860</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <?php
        require_once 'services/db_config.php';
        session_start();

        if(!$_SESSION['userid']){
            print '<script>window.location.assign("login.php");</script>';   //  If not logged in, return to home

        }
        if(!$_SESSION['privilege'] == 'Admin'){
            print '<script>alert("You are not authorized to access this page!");</script>';
            print '<script>window.location.assign("index.php");</script>';   //  If not admin, return to home
        }

        require_once "modules/nav.php";
        get_navbar();

        $doc_id = $_GET['doc_id'];

        // create a query to get the doc and item details
        $query = "SELECT * FROM doc_request INNER JOIN document ON doc_request.doc_id = document.doc_id WHERE document.doc_id = $doc_id";
        $result = mysqli_query($con, $query);
        $doc = mysqli_fetch_assoc($result);

        // } else {
        //     header('Location: docAppDis.php');
        // }
    ?>
<div class="container mt-5 w-50 main-container p-5">
    <h1 class="m-3 custom-title">Viewing Document <?php echo $doc['doc_id'] ?></h1>
    <h3 class="my-2 mx-3 custom-semi">Requested by: <?php echo $doc['lastname'] . ", " . $doc['firstname']?></h2>
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
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $doc['lastname']?>">
                </div>
                <div class="col">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $doc['firstname']?>">
                </div>
                <div class="col">
                    <label for="middlename" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $doc['middlename']?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Home Address</label>
                    <textarea class="form-control" id="address" name="address" rows="5"><?php echo $doc['address']?></textarea>
                </div>
                <?php
                if ($doc['doc_type'] == 'Barangay Clearance') { 
                ?>
                <div class="row mb-3">
                    <div class="col">
                        <label for="purpose" class="form-label">Purpose</label>
                        <input type="text" class="form-control" id="purpose" name="purpose" value="<?php echo $doc['purpose'] ?>">
                    </div>
                    <div class="col">
                        <label for="tct" class="form-label">Transfer Certificate of Title</label>
                        <input type="text" class="form-control" id="tct" name="tct" value="<?php echo $doc['tct'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <textarea class="form-control" id="location" name="location" rows="5"><?php echo $doc['location'] ?></textarea>
                </div>
                <?php } else if ($doc['doc_type'] == 'Barangay ID'){ ?>
                <div class="mb-3">
                    <label for="contact_number" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number" value="<?php echo $doc['contact_number'] ?>">
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" id="dob" name="dob" class="form-control" value="<?php echo $doc['dob'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" name="gender" class="form-select">
                            <option value="" selected disabled>Choose...</option>
                            <option value="Male"<?=$doc['gender'] == 'Male' ? ' selected="selected"' : '';?>>Male</option>
                            <option value="Female"<?=$doc['gender'] == 'Female' ? ' selected="selected"' : '';?>>Female</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="status" class="form-label">Civil Status</label>
                        <select id="status" name="status" class="form-select">
                            <option value="" selected disabled>Choose...</option>
                            <option value="Single"<?=$doc['status'] == 'Single' ? ' selected="selected"' : '';?>>Single</option>
                            <option value="Married"<?=$doc['status'] == 'Married' ? ' selected="selected"' : '';?>>Married</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="employer_name" class="form-label">Employer's Name</label>
                    <input type="text" class="form-control" id="employer_name" name="employer_name" value="<?php echo $doc['employer_name'] ?>">
                </div>
                <hr/>
                <div class="mb-3">
                    <h4 class="custom-semi">Parent Details</h4>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="mother_name" class="form-label">Mother's Name</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo $doc['mother_name']?>">
                    </div>
                    <div class="col">
                        <label for="father_name" class="form-label">Father's Name</label>
                        <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo $doc['father_name']?>">
                    </div>
                </div>
                <hr/>
                <div class="mb-3">
                    <h4 class="custom-semi">Emergency Contact Details</h4>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-5">
                        <label for="ec_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="ec_name" name="ec_name" value="<?php echo $doc['ec_name'] ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="ec_relationship" class="form-label">Relationship</label>
                        <input type="text" class="form-control" id="ec_relationship" name="ec_relationship" value="<?php echo $doc['ec_relationship'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="ec_contact" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="ec_contact" name="ec_contact" value="<?php echo $doc['ec_contact'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ec_address" class="form-label">Address</label>
                        <textarea class="form-control" id="ec_address" name="ec_address" rows = "5"><?php echo $doc['ec_address'] ?> </textarea>
                    </div>
                </div>
                <hr/>
                <div class="mb-3">
                    <h4>Classification</h4>
                    <select id="classification" name="classification" class="form-select">
                        <option value="" selected disabled>Choose...</option>
                        <option value="Homeowner"<?=$doc['classification'] == 'Homeowner' ? ' selected="selected"' : '';?>>Homeowner</option>
                        <option value="Household Helper"<?=$doc['classification'] == 'Household Helper' ? ' selected="selected"' : '';?>>Household Helper</option>
                        <option value="Married"<?=$doc['classification'] == 'Married' ? ' selected="selected"' : '';?>>Married</option>
                    </select>
                </div>
                <?php } else if ($doc['doc_type'] == 'Residency'){ ?>
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="status" class="form-label mx-1">Civil Status</label>
                        <select id="status" name="status" class="form-select">
                            <option value="" selected disabled>Choose...</option>
                            <option value="Single"<?=$doc['status'] == 'Single' ? ' selected="selected"' : '';?>>Single</option>
                            <option value="Married"<?=$doc['status'] == 'Married' ? ' selected="selected"' : '';?>>Married</option>
                        </select>
                    </div>
                    <div class="col-8">
                        <label for="requirement_for" class="form-label">Requirement For: </label>
                        <input type="text" class="form-control" id="requirement_for" name="requirement_for" value="<?php echo $doc['requirement_for'] ?>">
                    </div>
                </div>
                <?php } ?>
                  <div class="row justify-content-md-center g-3 mb-3">
                  <input type="hidden" name="doc_id" value="<?php echo $doc['doc_id']; ?>">
                  <input type="hidden" name="doc_type" value="<?php echo $doc['doc_type']; ?>">
                    <div class="col col-md-2">
                        <button type="submit" name='approve_submit' class="btn btn-success lgreen w-100">Approve</button>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name='deny_submit' class="btn btn-danger lred w-100">Deny</button>
                    </div>
                    <div class="col col-lg-2">
                        <button type="submit" name='pending_submit' class="btn btn-secondary custom-semi w-100">Pending</button>
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