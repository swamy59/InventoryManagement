<?php
include 'db_connect.php';
$sql = "SELECT id, itemname, itemcount FROM Items";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 echo "<table border='1'><tr><th>ID</th><th>Item Name</th><th>Item Count</th></tr>";
 // output data of each row
 while($row = $result->fetch_assoc()) {
   echo "<tr><td>" . $row["id"]. "</td><td>" . $row["itemname"]. "</td><td>" . $row["itemcount"]. "</td></tr>";
 }
 echo "</table>";
} else {
 echo "0 results";
}
echo '<a href="add_item.html">Add Item</a><br>';
echo '<a href="update_item.html">Update Item</a>';
$conn->close();
?>