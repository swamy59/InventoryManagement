<?php
include 'db_connect.php';
$itemid = $_POST['itemid'];
$itemname = $_POST['itemname'];
$itemcount = $_POST['itemcount'];

$sql = "INSERT INTO Items (id,itemname, itemcount) VALUES ('$itemid','$itemname', '$itemcount')";

if ($conn->query($sql) === TRUE) {
  echo "New item added successfully";
  echo "</br>";
  echo '<a href="display_items.php">View Items</a><br>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
