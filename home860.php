<!DOCTYPE html>
<html lang="en-US">
<head>
    <title> Home 860 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--needed for sticky navigation bar to work-->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"><!-- Favicon|image in web browser -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="module" src="./index.js"></script>
    <link rel="stylesheet" href="css/others.css"> <!-- styles -->
    <link rel="stylesheet" href="css/navbar.css"> <!-- styles -->
    <link rel="stylesheet" href="css/slideshow.css"> <!-- styles -->
    <link rel="stylesheet" href="css/img.css"> <!-- styles -->
</head>
<?php
    //require_once "nav.php"
    ?>
<body>
    <div class="navbar"><!--navigation bar-->
    <div class="logo">
        <img src="img/logo2.png" style="width: 45%;">
    </div>
    <a href="home860.php">Home</a>
    <a href="docList.html">Documents</a>
    <div class="dropdown">
        <button class="dropbtn">About 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="contactUs.html">Contact Us</a>
          <a href="brgyOff.html">Barangay Officials</a>
        </div>
    </div>
    <a href="formrequest860.html">Form Requests</a>
    <a href="login860.php" style="float: right;">Login</a> 
    </div>

    <div class="slideshow-container"><!--slideshow image-->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <a href="#part1"><img src="img/no1.jpg" style="width:100%"></a>
        <div class="text">
            <b style="font-size: 90px;">Barangay 860</b><br>
            <p style="font-size: 35px; margin-top: -5px;">City of Manila</p>
        </div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <a href="#part2"><img src="img/no2.jpg" style="width:100%"></a>
        <div class="text">
            <b style="font-size: 90px;">Demographic</b><br>
            <p style="font-size: 35px; margin-top: -5px;">Click to be redirected!</p>
        </div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <a href="#part3"><img src="img/no3.jpg" style="width:100%"></a>
        <div class="text">
            <b style="font-size: 90px;">Location</b><br>
            <p style="font-size: 35px; margin-top: -5px;">Click to be redirected!</p>
        </div>
    </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div><br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div>

    <div class="content"><!--Main Content w/ left & right margin = center--><span id="brCustomSpace2"></span>
    <p><b>Barangay 860</b> is a barangay in the city of Manila, under the administrative district of Pandacan. Its population as determined by the 2020 Census was 3,214. This represented 0.17% of the total population of Manila.</p><span id="brCustomSpace1"></span>
    <table style="width:50%; margin-left: auto; margin-right: auto;">
        <tr><th colspan="2" style="text-align:right; padding-top: 10px; padding-bottom: 10px;">Summary Data</th></tr>
        <tr><td><b>Type:</b></td><td>Barangay</td></tr>
        <tr><td><b>Island Group:</b></td><td>Luzon</td></tr>
        <tr><td><b>Region:</b></td><td>National Capital Region (NCR)</td></tr>
        <tr><td><b>City:</b></td><td>Manila</td></tr>
        <tr><td><b>District:</b></td><td>Pandacan</td></tr>
        <tr><td><b>Population (2020):</b></td><td>3,214</td></tr>
        <tr><td><b>Philippine major island(s):</b></td><td>Luzon</td></tr>
        <tr><td><b>Coordinates</b></td><td>14.5894, 121.0068 (14° 35' Nortd, 121° 0' East)</td></tr>
        <tr><td><b>Estimated elevation above sea level:</b></td><td>5.9 meters (19.4 feet)</td></tr>
    </table><span id="brCustomSpace3"></span>
    </div>

    <div class="container"><!--start of demographic-->
        <img id="part2" src="img/demographic2.jpg" style="width:100%">
        <div class="centered"><b style="font-size: 110px;">Demographic</b></div>
    </div>
    
    <div class="content"><span id="brCustomSpace2"></span>
    <h1>Households</h1>
    <p>The household population of Barangay 860 in the 2015 Census was 1,390 broken down into 323 households or an average of 4.30 members per household.</p><span id="brCustomSpace1"></span>
    <table style="width:70%; margin-left: auto; margin-right: auto; text-align: center;">
        <tr style="background-color: #04AA6D;"><th>Census Date</th><th>Household Population</th><th>Number of Households</th><th>Average Household Size</th></tr>
        <tr><td><b>1990 May 1</b></td><td>1826</td><td>368</td><td>4.96</td></tr>
        <tr><td><b>1995 Sep 1</b></td><td>1306</td><td>349</td><td>3.74</td></tr>
        <tr><td><b>2000 May 1</b></td><td>1450</td><td>309</td><td>4.69</td></tr>
        <tr><td><b>2007 Aug 1</b></td><td>1673</td><td>354</td><td>4.73</td></tr>
        <tr><td><b>2010 May 1</b></td><td>1522</td><td>378</td><td>4.03</td></tr>
        <tr><td><b>2015 Aug 1</b></td><td>1390</td><td>323</td><td>4.30</td></tr>
    </table><span id="brCustomSpace3"></span>
    </div>

    <div class="container"><!--start of location-->
        <img id="part3" src="img/aerial.jpeg" style="width:100%">
        <div class="centered"><b style="font-size: 110px;">Location</b></div>
    </div>

    <div class="content"><span id="brCustomSpace2"></span>
    <p>Barangay 860 is situated at approximately 14.5894, 121.0068, in the island of Luzon. Elevation at these coordinates is estimated at 5.9 meters or 19.4 feet above mean sea level</p><span id="brCustomSpace1"></span>
        <div class="mapouter"><!--code of google maps-->
        <div class="gmap_canvas">
        <iframe width="637" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=barangay%20860&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br>
            <style>.mapouter{position:relative;text-align:right;height:500px;width:637px;}</style>
        <a href="https://www.embedgooglemap.net">create google maps for website</a>
        <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:637px;}</style>
        </div>
        </div><span id="brCustomSpace1"></span>
    <h2>Adjacent Barangays</h2><hr>
    <p>Barangay 860 shares a common border with the following barangay(s):</p>
    <ul>
        <li>Barangay 839, Manila</li>
        <li>Barangay 840, Manila</li>
        <li>Barangay 862, Manila</li>
        <li>Barangay 835, Manila</li>
        <li>Barangay 865, Manila</li>
        <li>Barangay 864, Manila</li>
        <li>Barangay 861, Manila</li>
        <li>Barangay 863, Manila</li>
    </ul>  
    </div><span id="brCustomSpace3"></span>
    
    <div >
        <p>C</p>
    </div>

<!---------------------- SCRIPTS ------------------------>
    <!-- Sticky NavBar -->
    <script>
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
    }
    </script>

    <!-- Slideshow -->
    <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }
    </script>
</body>
</html>