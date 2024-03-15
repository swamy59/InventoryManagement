<?php
include 'db_connect.php';

$itemid = $_POST['itemid'];
$newcount = $_POST['newcount'];

$sql = "UPDATE Items SET itemcount='$newcount' WHERE id='$itemid'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  echo "</br>";
  echo '<a href="display_items.php">View Items</a>';
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
