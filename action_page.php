<?php
include ('setup.php');
print_r($_POST);
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$country = $_POST["country"];
$subject = $_POST["subject"];
$email = $_POST["email"];

$sql = "INSERT INTO feedback (firstname, lastname, email, subject)
VALUES ('$fname', '$lname', '$email', '$subject')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>