<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
    // error_reporting(0);
  	if ($_POST[customer]=="")
	{	echo "<script>alert('添加失败');window.location='customer.php'</script>";
	}
		else{
		include('configure/conn.php');
		$sql="INSERT INTO yhxx (`lianxiren`,`telephone`,`email`) VALUES ('$_POST[customer]','$_POST[telephone]','$_POST[email]')";
		$result=mysql_query($sql);
		echo "<script>alert('添加成功');window.location='customer.php'</script>";
		}
	?>