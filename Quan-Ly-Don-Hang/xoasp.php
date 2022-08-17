<?php
include_once('connect2.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$idsp=$_GET['id'];
$sql = "DELETE FROM product WHERE idsp='$id'";
if ($conn->query($sql) === TRUE) {
header("location: xemchitiet.php");
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>
