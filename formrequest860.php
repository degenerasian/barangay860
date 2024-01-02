<!DOCTYPE html>
<html lang="en-US">
<head>
    <title> Form Request 860 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--needed for sticky navigation bar to work-->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"><!-- Favicon|image in web browser -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="module" src="./index.js"></script>
    <link rel="stylesheet" href="css/others.css"> <!-- styles -->
    <link rel="stylesheet" href="css/navbar.css"> <!-- styles -->
    <link rel="stylesheet" href="css/slideshow.css"> <!-- styles -->
    <link rel="stylesheet" href="css/img.css"> <!-- styles -->
</head>
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

    

    <div class="logincontent1"><!--Main Content w/ left & right margin = center-->
        <div class="logincontent2">
            <center>
                <div class="container2">
                    <center>
                        <table class="formtable1">
                            <tr>
                                <td class="formheading1">Enter Request ID: </td>
                                <td class="formheading1"><input type="text" placeholder="xxxx-xxxx" class="logininput" required="required"/></td>
                            </tr>
                            </table><br><br>
                    
                </center>
                </div>
               
            <div class="logincontent3">
                <center>
                    <table class="edittable">
                        <tr>
                            <th class="tableheading">Document 1</th>
                            <td class="tabletd">Not Yet Approved</td>
                        </tr>
                        <tr>
                            <th class="tableheading">Document 2</th>
                            <td class="tabletd">Not Yet Approved</td>
                        </tr>
                    </table>
            </center>
            </div>
        </center>
         </div>
    
    </div>



</body>
</html>
