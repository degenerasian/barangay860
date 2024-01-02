<!DOCTYPE HTML>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"><!-- Favicon|image in web browser -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apply for Documents | Barangay 860</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <?php
        require_once 'services/db_config.php';
        session_start();

        if(!$_SESSION['userid']){
            print '<script>window.location.assign("login.php");</script>';   //  If not logged in, return to home

        }

        require_once "modules/nav.php";
        get_navbar();

        $sess_id = $_SESSION['userid'];
        $query = "SELECT * FROM accounts WHERE userid = '$sess_id'";
        $result = mysqli_query($con, $query);
        $user = mysqli_fetch_assoc($result);

        $type = $_GET['type'];

        // create a query to get the doc and item details


        // } else {
        //     header('Location: docAppDis.php');
        // }
    ?>
<div class="container mt-5 w-50 main-container p-5">
    <h1 class="m-3 custom-title">Applying for <?php echo $type ?></h1>
    <h3 class="my-2 mx-3 custom-semi">Requested by: <?php echo $user['firstname'] . " " . $user['lastname']?></h2>
    <div class="row g-5">
        <div class="col">
            <form class="mx-3" method="post" action="services/apply.php"> 
                <hr/>
                <div class="mb-3">
                    <h4 class="custom-semi">Personal Details</h4>
                </div>
                <div class="row mb-3">
                <div class="col">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname']?>" required>
                </div>
                <div class="col">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['firstname']?>" required>
                </div>
                <div class="col">
                    <label for="middlename" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $user['middlename']?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Home Address</label>
                    <textarea class="form-control" id="address" name="address" rows="5" required><?php echo $user['address']?></textarea>
                </div>
                <?php
                if ($type == 'Barangay Clearance') { 
                ?>
                <div class="row mb-3">
                    <div class="col">
                        <label for="purpose" class="form-label">Purpose</label>
                        <input type="text" class="form-control" id="purpose" name="purpose" required>
                    </div>
                    <div class="col">
                        <label for="tct" class="form-label">Transfer Certificate of Title</label>
                        <input type="text" class="form-control" id="tct" name="tct" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <textarea class="form-control" id="location" name="location" rows="5" required></textarea>
                </div>
                <?php } else if ($type == 'Barangay ID'){ ?>
                <div class="mb-3">
                    <label for="phonenumber" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $user['phonenumber'] ?>" required>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="dateofbirth" class="form-label">Date of Birth</label>
                        <input type="date" id="dateofbirth" name="dateofbirth" class="form-control" value="<?php echo $user['dateofbirth'] ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" name="gender" class="form-select" required>
                            <option value="" selected disabled>Choose...</option>
                            <option value="Male"<?=$user['gender'] == 'Male' ? ' selected="selected"' : '';?>>Male</option>
                            <option value="Female"<?=$user['gender'] == 'Female' ? ' selected="selected"' : '';?>>Female</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="idstatus" class="form-label">Civil Status</label>
                        <select id="idstatus" name="id  status" class="form-select" required>
                            <option value="" selected disabled>Choose...</option>
                            <option value="Single"<?=$user['civilstatus'] == 'Single' ? ' selected="selected"' : '';?>>Single</option>
                            <option value="Married"<?=$user['civilstatus'] == 'Married' ? ' selected="selected"' : '';?>>Married</option>
                            <option value="Widowed"<?=$user['civilstatus'] == 'Widowed' ? ' selected="selected"' : '';?>>Widowed</option>
                            <option value="Separated"<?=$user['civilstatus'] == 'Separated' ? ' selected="selected"' : '';?>>Separated</option>
                            <option value="Divorced"<?=$user['civilstatus'] == 'Divorced' ? ' selected="selected"' : '';?>>Divorced</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="employer_name" class="form-label">Employer's Name</label>
                    <input type="text" class="form-control" id="employer_name" name="employer_name" required>
                </div>
                <hr/>
                <div class="mb-3">
                    <h4 class="custom-semi">Parent Details</h4>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="mother_name" class="form-label">Mother's Name</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name" required>
                    </div>
                    <div class="col">
                        <label for="father_name" class="form-label">Father's Name</label>
                        <input type="text" class="form-control" id="father_name" name="father_name" required>
                    </div>
                </div>
                <hr/>
                <div class="mb-3">
                    <h4 class="custom-semi">Emergency Contact Details</h4>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-5">
                        <label for="ec_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="ec_name" name="ec_name" required>
                    </div>
                    <div class="col-md-4">
                        <label for="ec_relationship" class="form-label">Relationship</label>
                        <input type="text" class="form-control" id="ec_relationship" name="ec_relationship" required>
                    </div>
                    <div class="col-md-3">
                        <label for="ec_contact" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="ec_contact" name="ec_contact" required>
                    </div>
                    <div class="mb-3">
                        <label for="ec_address" class="form-label">Address</label>
                        <textarea class="form-control" id="ec_address" name="ec_address" rows = "5" required></textarea>
                    </div>
                </div>
                <hr/>
                <div class="mb-3">
                    <h4>Classification</h4>
                    <select id="classification" name="classification" class="form-select" required>
                        <option value="" selected disabled>Choose...</option>
                        <option value="Homeowner">Homeowner</option>
                        <option value="Household Helper">Household Helper</option>
                        <option value="Married">Married</option>
                    </select>
                </div>
                <?php } else if ($type == 'Residency'){ ?>
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="resstatus" class="form-label mx-1">Civil Status</label>
                        <select id="resstatus" name="resstatus" class="form-select" required>
                            <option value="" selected disabled>Choose...</option>
                            <option value="Single"<?=$user['civilstatus'] == 'Single' ? ' selected="selected"' : '';?>>Single</option>
                            <option value="Married"<?=$user['civilstatus'] == 'Married' ? ' selected="selected"' : '';?>>Married</option>
                            <option value="Widowed"<?=$user['civilstatus'] == 'Widowed' ? ' selected="selected"' : '';?>>Widowed</option>
                            <option value="Separated"<?=$user['civilstatus'] == 'Separated' ? ' selected="selected"' : '';?>>Separated</option>
                            <option value="Divorced"<?=$user['civilstatus'] == 'Divorced' ? ' selected="selected"' : '';?>>Divorced</option>
                        </select>
                    </div>
                    <div class="col-8">
                        <label for="requirement_for" class="form-label">Requirement For: </label>
                        <input type="text" class="form-control" id="requirement_for" name="requirement_for" required>
                    </div>
                </div>
                <?php } ?>
                  <div class="row justify-content-md-center g-3 mb-3">
                  <input type="hidden" name="userid" value="<?php echo $user['userid']; ?>">
                  <input type="hidden" name="doc_type" value="<?php echo $type; ?>">
                    <div class="col col-md-2">
                        <button type="submit" name='apply_submit' class="btn btn-success lgreen w-100">Apply</button>
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