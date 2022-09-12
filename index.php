<html>
  <head>
    <title>Fire and Living </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-
awesome.min.css"> 

    </head>

    <?php include"setup.php";
    
    $sql = "SELECT * FROM pages where id=1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        #debugging print_r($row);
        $title1=$row["title"];
        $para1=$row["para1"];
        $image1=$row["image1"];
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>







    <body>
    <?php include "banner.php";?>

<!------banner section---------->
<section id="banner">
<div class="container">
<div class="row">
<div class="col-md-6">
  <h1 class="promo-title"> <?php print $title1; ?> </h1>
  <p> <?php print $para1; ?> </p>
  <a href="#Showroom"><img src="images/fire.png" class="play-btn">OUR FIRES ( SHOWROOM )</a>

</div>
<div class="col-md-6 text-center">
  <img src="images/<?php print $image1; ?>" width="300" height="120" class="img-fluid">

</div>
</div>
</div>

<img src="images/wave1.png" class="bottom_img">

</section>


<section id="social-media">
<div class="container text-center">
<p>FIND US ON SOCIAL MEDIA</p>
<div class="social-icons">
<a href="#https://www.facebook.com/"><img src="images/facebook-icon.png"></a>
<a href="#https://www.instagram.com/"><img src="images/instagram-icon.png"></a>
<a href="#https://twitter.com/"><img src="images/twitter-icon.png"></a>
</div>
</div>
</section>

<!-------------Footer section------->

<section id="footer">
<div class="container">
<div class="row">
<div class="col-md-4 footer-box">
<img src="images/logo.png">
<p>Follow our socials above to see more of what we do behind the scenes!</p>
</div>
<div class="col-md-4 footer-box">
<p><b>Contact us</b></p>
<p><i class="fa fa-map-marker"></i>Warkworth, New Zealand</p>
<p><i class="fa fa-phone"></i>+64 224218047</p>
<p><i class="fa fa-envelope-o"></i>Jono@fireandliving.co.nz</p>

</div>
<div class="col-md-4 footer-box">
<p><b>®Fireandliving Ltd.</b></p>
<img src="images/Me.png">
<p><b>Jonathan Boundy- Founder/Owner</b></p>


</div>
</div>
</div>

    </body>
</html> 