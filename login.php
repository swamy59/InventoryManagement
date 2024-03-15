<?php
include 'db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM Users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  header('Location: display_items.php');
} else {
  echo "Invalid Username or password";
}
$conn->close();
?>
