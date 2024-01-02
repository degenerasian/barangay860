<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Login | Barangay 860</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"><!-- Favicon|image in web browser -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<?php
require_once("modules/nav.php");
session_start();
get_navbar();
?>
<body>
<div class="container mt-5 w-50">
    <div class="row g-5">
    <div class="col logincontent"><!--Main Content w/ left & right margin = center-->
    <h1 class="m-3">Log In</h1>
        <center><img src="img/logo.png" style="width:170px"></center>
        <form method="POST" action="services/login.php">
        <div class="row align-items-center">
            <div class="mb-3 col-2"></div>
            <div class="mb-3 col-8">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
            </div>
            <div class="mb-3 col-2"></div>
        </div>
        <div class="row align-items-center">
            <div class="mb-3 col-2"></div>
            <div class="mb-3 col-8">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>
            <div class="mb-3 col-2"></div>
        </div>
            <div class="mb-4 col-auto" style="text-align:center;">
                <button type="submit" name='submit' class="btn btn-info w-auto">Login</button>
            </div>
        </form>
    </div>
</div>
</div>
<?php get_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>