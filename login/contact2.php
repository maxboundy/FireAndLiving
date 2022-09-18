
<html>
<?php include("setup.php");?> 
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	$_SESSION['message'] = "Please login to access this page!";
	exit;
}
?>

<div class="content">
			<h2>Orders</h2>
			
			
      <table id="feedback">
        <tr>
        <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Subject</th>
        </tr>


        <?php   
        $sql = "SELECT * FROM feedback";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            
            
            #debugging print_r($row);
                $id=$row["firstname"];
            $title1=$row["lastname"];
            $para1=$row["email"];
            $image1=$row["subject"];
          
    ?>

<td><?php echo "$id"; ?> </td>
          <td><?php echo "$fname"; ?> </td>
          <td><?php echo "$lname"; ?></td>
          <td><?php echo "$email"; ?></td>
          <td><?php echo "$subject"; ?></td>
      
        </tr>

        <?php
    }} else {
        echo "0 results";
    }
$conn->close();
      
    ?>


</table>
		</div>