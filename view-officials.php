<!DOCTYPE HTML>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"><!-- Favicon|image in web browser -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Barangay Officials | Barangay 860</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
        <?php
        session_start();
        require_once "services/db_config.php";
        
        if(!$_SESSION['userid']){
            print '<script>window.location.assign("login.php");</script>';   //  If not logged in, return to home
        }
        if($_SESSION['privilege'] == 'User'){
            print '<script>alert("You are not authorized to access this page!");</script>';
            print '<script>window.location.assign("index.php");</script>';   //  If not admin, return to home
        }

        $query = "SELECT * FROM brgy_off";
        $result = mysqli_query($con, $query);
        $officials = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $officials[] = $row;
        }
        ?>
        <?php
        require_once "modules/nav.php";
        get_navbar();
        ?>

    </br>
        <div class="container mt-5 p-4 main-container">
        <h1 class="m-3 custom-title" style="text-align: center;">BARANGAY OFFICIALS</h1>
		<center><a href="add-official.php" role="button" class="btn btn-success lgreen w-auto my-3">Add Barangay Official</a></center>
        <div style="border-radius:12px; overflow: auto;" class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="pt-3">          
                    <th scope="col" class="py-3">Picture</th>
                    <th scope="col" class="py-3">Name</th>
                    <th scope="col" class="py-3">Position</th>
                    <th scope="col" class="py-3">Email</th>
                    <th scope="col" class="py-3">Contact Number</th>
                    <th scope="col" class="py-3" colspan="4">View</th>
                </thead>
                <?php foreach($officials as $official){ ?>
                        <tr>
                            <td><img src="<?php echo $official['image']; ?>" style="width:100px;"></td>
                            <td><?php echo $official['firstname'] . " " . $official['middlename'] . " " . $official['lastname']; ?></td>
                            <td><?php echo $official['position']; ?></td>
                            <td><?php echo $official['email']; ?></td>
                            <td><?php echo $official['mobile_number']; ?></td>
                            <td><a class="btn btn-primary lblue w-auto" href="edit-official.php?official_id=<?php echo $official['official_id']?>" role="button">View</a></td>
                        </tr>
                    <?php } ?>
            </table>
        </div>
    </div>

	<?php get_footer(); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        </body>
    </html>