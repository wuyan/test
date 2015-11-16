<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
     error_reporting(0);
  	include('configure/conn.php');
	$date=date('Y-m-d');
	$sql="INSERT INTO orderform (`customer`,`status`,`time`,`city`,`address`) VALUES ('$_POST[customer]','1','$date','$_POST[city]','$_POST[address]')";
	$result=mysql_query($sql);
	echo "<script>window.location='main.php'</script>";
?>