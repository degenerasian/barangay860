<?php
require_once("style.php");
init_style();
if (!isset($_SESSION['privilege'])) {
	$_SESSION['privilege'] = '';
} 
function get_navbar(){ ?>
<nav class="navbar navbar-expand-lg bg-light sticky-top">   <!--    Responsive NavBar  -->
    <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <a href="index.php"><img src="img/logo2.png" style="width:50px;" class="ms-5"></a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                    <li class="nav-item px-4 hover">
                        <a class="nav-link clickable" aria-current="page" href="index.php">Home</a>                                
                    </li>
					<?php if ($_SESSION['privilege'] == 'Admin'){ ?>
                    <li class="nav-item dropdown px-4 hover">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            Documents
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="docAppDis.php?approve=Pending">Pending</a></li>
                            <li><a class="dropdown-item" href="docAppDis.php?approve=Approved">Approved</a></li>
                            <li><a class="dropdown-item" href="docAppDis.php?approve=Denied">Denied</a></li>
                        </ul>
                    </li>
					<?php } else { ?>
                    <li class="nav-item px-4 hover">
                        <a class="nav-link clickable" aria-current="page" href="documents.php">Documents</a>
                    </li>
					<?php } ?>
                    <li class="nav-item dropdown px-4 hover">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php#barangayOfficials">Barangay Officials</a></li>
                            <li><a class="dropdown-item" href="index.php#contactUs">Contact Us</a></li>
                            <?php if($_SESSION['privilege'] == 'Admin'){?>
                                <li><a class="dropdown-item" href="view-officials.php">Edit Barangay Officials</a></li>  
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-4 hover">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Form Requests
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="apply.php?type=Barangay%20ID">Barangay ID</a></li>
                            <li><a class="dropdown-item" href="apply.php?type=Barangay%20Clearance">Barangay Clearance</a></li>
                            <li><a class="dropdown-item" href="apply.php?type=Residency">Certificate of Residency</a></li>
                        </ul>
                    </li>
                </ul>
                <?php
                    if($_SESSION['userid'] ?? ''){    //  If user is logged in, display all options
					?>
                    <div class="me-3">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                            <li class="nav-item px-4 hover">
                                <a class="nav-link clickable" aria-current="page" href="services/logout.php">Logout</a>    
                            </li>
							<li class="nav-item px-4 hover">
                                <a class="nav-link clickable" aria-current="page" href="editprofile860.php">Edit Profile</a>    
                            </li>
                        </ul>
					</div>
					<?php
                    } else {
						?>
                    <div class="me-3">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                            <li class="nav-item px-4 hover">
                                <a class="nav-link clickable" aria-current="page" href="login.php">Login</a>                                
                            </li>
                            <li class="nav-item px-4 hover">
                                <a class="nav-link clickable" aria-current="page" href="register.php">Register</a>
                            </li>
                        </ul>
                    </div>
                <?php
                }
                ?>
            </div>
					
        </div>
    </nav>
    <br/>
<?php } ?>

<?php function get_footer(){ ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="bg-dark text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); color: white">
    © 2023 Copyright: Brgy. 860 Pandacan Manila by Team Brunei
  </div>
</footer>
<?php } ?>