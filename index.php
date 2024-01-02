<!DOCTYPE HTML>
<html lang='en'>
<head>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"><!-- Favicon|image in web browser -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Barangay 860</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<?php
session_start();
require_once("modules/nav.php");
require_once "services/db_config.php";
get_navbar();

        $query = "SELECT * FROM brgy_off";
        $result = mysqli_query($con, $query);
        $offs = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $offs[] = $row;
        }
?>

    <body>
        <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/no1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/no2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/no3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <div class="container mt-5 white">
            <div class="my-3">
				<center>
					<h1 class="custom-title" style="font-size:64px;">Barangay 860</h1>
					<h1 class="custom-semi">City of Manila</h1>
				</center>
            </div> 
            
            <div class="row my-5 mx-5">
			<center>
                <div class="col-lg-10">
                    <p style="font-size: 1.3em; text-align: center">Barangay 860  is a barangay in the city of Manila, under the administrative district of Pandacan. Its population as determined by the 2020 Census was 3,214. This represented 0.17% of the total population of Manila.</p>
                </div>
			</center>
            </div> 
			
		
		
			<div class="row my-5 mx-5"> 
              <center>
			  <table style="width:50%;">
					<tr><th colspan="2" style="text-align: center">Summary Data</th></tr>
					<tr><td><b>&nbsp</b></td><td></td></tr>
					<tr><td><b>Type:</b></td><td>Barangay</td></tr>
					<tr><td><b>Island Group:</b></td><td>Luzon</td></tr>
					<tr><td><b>Region:</b></td><td>National Capital Region (NCR)</td></tr>
					<tr><td><b>City:</b></td><td>Manila</td></tr>
					<tr><td><b>District:</b></td><td>Pandacan</td></tr>
					<tr><td><b>Population (2020):</b></td><td>3,214</td></tr>
					<tr><td><b>Philippine major island(s):</b></td><td>Luzon</td></tr>
					<tr><td><b>Coordinates</b></td><td>14.5894, 121.0068 (14° 35' Nortd, 121° 0' East)</td></tr>
					<tr><td><b>Estimated elevation above sea level:</b></td><td>5.9 meters (19.4 feet)</td></tr>
				</table>
				</center>
            </div> 
			<hr>
			
			<div style="background: url('img/demographic.jpg'); width: 100%; height: 50em; float: right; background-size: cover;"></div>
			&nbsp
			<center>
			<br><h1> Households </h1>
			<br>
				<h5 style='line-height: 1.6'>The household population of Barangay 860 in the 2015 Census was 1,390 broken down into 323 households or an average of 4.30 members per household.</h5>
			<br>
			<table style="width:90%; text-align: center;">
				<tr style="background-color: #04AA6D;"><th>Census Date</th><th>Household Population</th><th>Number of Households</th><th>Average Household Size</th></tr>
				<tr><td><b>1990 May 1</b></td><td>1826</td><td>368</td><td>4.96</td></tr>
				<tr><td><b>1995 Sep 1</b></td><td>1306</td><td>349</td><td>3.74</td></tr>
				<tr><td><b>2000 May 1</b></td><td>1450</td><td>309</td><td>4.69</td></tr>
				<tr><td><b>2007 Aug 1</b></td><td>1673</td><td>354</td><td>4.73</td></tr>
				<tr><td><b>2010 May 1</b></td><td>1522</td><td>378</td><td>4.03</td></tr>
				<tr><td><b>2015 Aug 1</b></td><td>1390</td><td>323</td><td>4.30</td></tr>
			</table>
			</center>
        </div>
		
        <br/><br/><br/>
		
        <div id="barangayOfficials" class="mb-5"></div>
        <br/><br/><br/>
        <div class="container mt-5 white" >
            <div class="my-3">
			<center>
                <h1 class="custom-title" style="font-size:64px;">Barangay Officials</h1>
            </center>
			</div>
            <div class="row g-5 my-5 mx-5 cols-5 ">
                <?php
                    foreach($offs as $off){
                ?>
                <div class="col-lg mx-auto">
                    <div class="row mb-5 d-flex justify-content-center">
                        <img src="<?php echo $off['image']?>" style="width:200px;" class="rounded-circle" alt="img/no_pic.webp">
                    </div>
                    <div class="row text-center">
                        <h2 class="custom-semi"><?php echo $off['firstname'] . " " . $off['lastname']?></h2>
                    </div>
                    <div class="row text-center">
                        <h5 class="custom-text"><?php echo $off['position']?></h5>
                    </div>
                    <div class="row text-center">
                        <h5 class="custom-text"><?php echo $off['email']?></h5>
                    </div>
                    <div class="row text-center">
                        <h5 class="custom-text"><?php echo $off['mobile_number']?></h5>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div> 
        </div>
		
		<br/><br/><br/>
		
        <div id="contactUs" class="mb-5">
        <div class="container mt-4 white" >
            <div class="my-3">
			<center>
                <h1 class="custom-title" style="font-size:64px;">Contact Us</h1>
            </center>
			</div>
			<br>
			<iframe width="637" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=barangay%20860&t=&z=17&ie=UTF8&iwloc=&output=embed" scrolling="no" style="float: left"></iframe>
			<div style="float: right; width: 37em; height: 20em">
				<br>
				<h4> Barangay 860 shares a common border with the following barangay(s): </h4>
				<ul style="font-size: 1.3em">
					<li>Barangay 839, Manila</li>
					<li>Barangay 840, Manila</li>
					<li>Barangay 862, Manila</li>
					<li>Barangay 835, Manila</li>
					<li>Barangay 865, Manila</li>
					<li>Barangay 864, Manila</li>
					<li>Barangay 861, Manila</li>
					<li>Barangay 863, Manila</li>
				</ul>
				<br>
				<p style="font-size: 1.3em">Here are the directories of the barangay:</p>
				<p>+98 000 0000</p>
				<p>Barangay Hall, Address St.</p>
			</div>
        </div>
		</div>
<?php get_footer(); ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>