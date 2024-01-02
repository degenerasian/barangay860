<!DOCTYPE HTML>
<html lang='en'>
<head>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"><!-- Favicon|image in web browser -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Barangay Official | Barangay 860</title>
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
    ?>
<div class="container mt-5 w-50 main-container p-5">
    <h1 class="m-3 custom-title">Add Barangay Official</h1>
    <div class="row g-5">
        <div class="col">
            <form class="mx-3" method="post" action="services/add-official.php"> 
                <div class="mb-3">
                </div>
                <hr/>
                <div class="row mb-3">
                    <div class="col">
                        <label for="suffix" class="form-label">Salutation</label>
                        <select id="suffix" name="suffix" class="form-select" required>
                            <option value="" selected disabled>Choose...</option>
                            <option value="Mr">Mr.</option>
                            <option value="Mrs">Mrs.</option>
                            <option value="Ms">Ms.</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                    <div class="col">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                    <div class="col">
                        <label for="middlename" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middlename" name="middlename" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position" name="position" required>
                    </div>
                    <div class="col">
                        <label for="barangay" class="form-label">Barangay</label>
                        <input type="text" class="form-control" id="barangay" name="barangay" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col">
                        <label for="mobile_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Picture</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <div class="row justify-content-md-center g-3 mb-3">
                    <div class="col col-md-2">
                        <button type="submit" name='edit_off' class="btn btn-success lgreen w-100">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<?php get_footer(); ?>
</body>

</html>