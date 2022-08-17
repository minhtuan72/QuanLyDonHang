<?php
include_once('connect2.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM donhang WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
header("location: xem.php");
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>
