
<?php
include ('admin/db_connect.php');
if(isset($_POST['delete'])){
	$id=mysqli_real_escape_string($conn, $_POST['id']);
	$sql= "DELETE FROM orders WHERE id = $id";
	if(mysqli_query($conn, $sql)){	
header("Location:admin/index.php?page=orders");}}
?>