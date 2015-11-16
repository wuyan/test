<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
     error_reporting(0);
  	include('configure/conn.php');
	$date=date('Y-m-d');
	$sql="UPDATE orderform SET `customer`='$_POST[customer]',`status`='1',`city`='$_POST[city]',`address`='$_POST[address]'  WHERE id='$_POST[id]'";
	$result=mysql_query($sql);

	$row=mysql_fetch_row($result);
		if (!$row['customer'])
		{

		echo "<script>alert('修改成功');window.location='main.php'</script>";
	}
	
?>