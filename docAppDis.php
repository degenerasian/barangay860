<!DOCTYPE HTML>
<html lang='en'>
<head>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"><!-- Favicon|image in web browser -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Document | Barangay 860</title>
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

        $approve = $_GET['approve'];

        $query = "SELECT * FROM doc_request INNER JOIN document ON doc_request.doc_id = document.doc_id WHERE approval = '$approve'";
        $result = mysqli_query($con, $query);
        $requests = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $requests[] = $row;
        }
        ?>
        <?php
        require_once "modules/nav.php";
        get_navbar();
        ?>

    </br>
        <div class="container mt-5 p-4 main-container">
        <h1 class="m-3 custom-title" style="text-align: center;">DOCUMENT APPROVAL</h1>
        <?php if($approve == 'Pending'){?>
            <h2 class="m-3 custom-semi" style="text-align: center;">Pending Documents</h1>
        <?php } else if($approve == 'Approved'){?>
            <h2 class="m-3 custom-semi" style="text-align: center;">Approved Documents</h1>
        <?php } else if($approve == 'Denied'){?>
            <h2 class="m-3 custom-semi" style="text-align: center;">Denied Documents</h1>
        <?php } ?>
        <div style="border-radius:12px; overflow: auto;" class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="pt-3">          
                    <th scope="col" class="py-3">Application Date</th>
                    <th scope="col" class="py-3">Document Type</th>
                    <th scope="col" class="py-3">Request ID</th>
                    <th scope="col" class="py-3">Name</th>
                    <th scope="col" class="py-3">Status</th>
                    <th scope="col" class="py-3" colspan="4">Actions</th>
                </thead>
                <?php
                        foreach($requests as $request){
                    ?>
                        <tr>
                            <td><span style="color: darkblue; font-weight: bold;"><?php echo $request['application_date']; ?></span></td>
                            <td><?php echo $request['doc_type']; ?></td>
                            <td><?php echo $request['request_id']; ?></td>
                            <td><?php echo $request['lastname'] . ", " . $request['firstname']; ?></td>
                            <td><?php echo $request['approval']; ?></td>
                            <td><a class="btn btn-primary lblue w-auto" href="edit-document.php?doc_id=<?php echo $request['doc_id']?>" role="button">View</a></td>
                        </tr>
                    <?php
                        }
                    ?>
            </table>
        </div>
		</div>
		<?php get_footer(); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        </body>
    </html>