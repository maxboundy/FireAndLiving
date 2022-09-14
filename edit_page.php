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

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

    </head>




<body> 

    <?php include "banner.php"; ?>


  

<?php  
    // $message= $_SESSION["message"];
     //  print $message; 

     include"setup.php";

    $sql = "SELECT * FROM pages";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
     while($row = $result->fetch_assoc()) {
        #print_r($row); #debugging 
        $pageID=$row["id"]; 
        $title=$row["title"];
        $para1=$row["para1"];
        $image1=$row["image1"];
        ?>
       
    <?php
                }
        } else {
            echo "There are no records in this table";
        }
    $conn->close();
    ?>
          
<form action="/action_page.php" method="post">
          <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="para1">Paragraph 1</label>
      </div>
      <div class="col-75">
        <textarea id="para1" name="para1" style="height:200px"><?php print $para1 ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="image1">Image One</label>
      </div>
      <div class="col-75">
        <input type="text" id="image1" name="image1" value="<?php print $image1 ?>">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
    

    
</body>
   

<!-----Admin table----->







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
</html>
