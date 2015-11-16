<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
    error_reporting(0);
  	$customer=$_POST['customer'];
    $status=$_POST['status'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$id=$_POST['id'];
	include('configure/conn.php');
	$sql="UPDATE orderform SET `customer`='$customer',`status`='$status',`city`='$city',`address`='$address' WHERE id=$id";
	$result=mysql_query($sql);
	echo "<script>window.location='main.php'</script>";
?>