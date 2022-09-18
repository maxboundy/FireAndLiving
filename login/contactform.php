<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'atestdb';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Fire and Living</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                <a href="contactform.php"><i class="fas fa-sign-out-alt"></i>Contact</a>
			</div>
		</nav>


        
<html>
<?php include("../setup.php");?> 
<?php
// We need to use sessions, so you should always start sessions using the below code.

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
                $fname=$row["firstname"];
            $lname=$row["lastname"];
            $email=$row["email"];
            $subject=$row["subject"];
          
    ?>


          <td><?php echo "$fname"; ?></td>
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