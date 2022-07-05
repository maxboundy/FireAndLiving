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
    <body>
    <section id="nav-bar">

<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="#"><img src="images/logo.png"></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-
label="Toggle navigation">
<i class="fa fa-bars"></i>

</button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="showroom.php">Showroom</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
    </div>

</nav>
</section>

<div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">location (closest too)</label>
    <select id="country" name="country">
      <option value="Auckland">Auckland</option>
      <option value="Wellington">Wellington</option>
      <option value="Christchurch">Christchurch</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

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
</section>
    </body>
</html>