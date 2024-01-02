<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Edit Profile | Barangay 860</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"><!-- Favicon|image in web browser -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<?php
require_once "services/db_config.php";
require_once("modules/nav.php");
session_start();
get_navbar();

$sql = "SELECT * FROM accounts WHERE userid='" . $_SESSION["userid"] . "'";
if ($is_query_run = mysqli_query($con, $sql)) {
    while ($query_executed = mysqli_fetch_assoc($is_query_run)){
        $fname = $query_executed['firstname'];
		$lname = $query_executed['lastname'];
		$mname = $query_executed['middlename'];
		$gender = $query_executed['gender'];
		$civilstatus = $query_executed['civilstatus'];
		$address = $query_executed['address'];
		$dateofbirth = $query_executed['dateofbirth'];
		$phoneno = $query_executed['phonenumber'];
		$telno = $query_executed['telephonenumber'];
		$email = $query_executed['email'];
		$username = $query_executed['username'];
		$password = $query_executed['password'];
    }
} else {
    echo "Error retrieving record";
}
?>

<body>
    <div class="container mt-5 w-50">
    <div class="row g-5">
    <div class="col logincontent"><!--Main Content w/ left & right margin = center-->
    <h1 class="m-3">Edit Profile</h1>
        <center><img src="img/logo.png" style="width:170px"></center>
		<br>
        <form method="POST" action="services/editprofile.php">
		<div class="row mb-3">
			<div class="col">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $fname ?>" required>
                </div>
            <div class="col">
                <label for="middlename" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $mname ?>" required>
            </div>
			<div class="col">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lname ?>" required>
            </div>
        </div>
		<div class="row mb-3">
			<div class="col">
                <label for="sex" class="form-label">Sex</label>
                <select class="form-control" id="sex" name="sex" value="<?php echo $gender ?>" required>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Female">Non-binary</option>
				</select>
                </div>
            <div class="col">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $dateofbirth ?>" required>
            </div>
			<div class="col">
                <label for="civilstatus" class="form-label">Civil Status</label>
                <select class="form-control" id="civilstatus" name="civilstatus" value="<?php echo $civilstatus ?>" required>
					<option value="Single">Single</option>
					<option value="Married">Married</option>
					<option value="Divorced">Divorced</option>
					<option value="Widowed">Widowed</option>
				</select>
            </div>
        </div>
		<div class="row mb-3">
			<div class="col">
                <label for="phoneno" class="form-label">Phone No.</label>
                <input type="number" class="form-control" id="phoneno" name="phoneno" value="<?php echo $phoneno ?>">
                </div>
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>">
            </div>
			<div class="col">
                <label for="telno" class="form-label">Telephone No.</label>
                <input type="number" class="form-control" id="telno" name="telno" value="<?php echo $telno ?>">
            </div>
        </div>
		<div class="row mb-3">
			<div class="col">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $address ?>" required>
            </div>
		</div>
		<br><hr><br>
		<div class="row mb-3">
            <div class="col">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $username ?>" required>
            </div>
            <div class="col">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo $password ?>" required>
            </div>
		</div>
		<br>
		<div class="mb-4 col-auto" style="text-align:center;">
			<button type="submit" name='submit' class="btn btn-info w-auto">Save Changes</button>
        </div>
        </form>
    </div>
</div>
</div>
<?php get_footer(); ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>
