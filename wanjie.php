<?php
	include('configure/conn.php');
	$sql="UPDATE orderform SET `status`=6 WHERE id='$_GET[id]'";
	$result=mysql_query($sql);
	echo "<script>window.location='main.php'</script>";
?>