<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
    error_reporting(0);
  	$customer_id=$_POST['customer_id'];
    $lianxiren=$_POST['customer'];
	$telephone=$_POST['telephone'];
	$email=$_POST['email'];
	$id=$_POST['id'];
	include('configure/conn.php');
	$sql="UPDATE yhxx SET `lianxiren`='$lianxiren',`telephone`='$telephone',`email`='$email' WHERE customer_id=$customer_id";
	$result=mysql_query($sql);
	echo "<script>alert('修改成功');window.location='customer.php'</script>";
?>