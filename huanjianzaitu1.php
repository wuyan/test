<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
	error_reporting(0);
	if($_POST[expressname]==""||$_POST[expresscard]==""||$_POST[expressdate]=="")
	{echo "<script>alert('修改失败');window.location='main.php';</script>";
	}
	else{
		include('configure/conn.php');
		$sql="UPDATE orderform SET `expressname`='$_POST[expressname]',`expresscard`='$_POST[expresscard]',`expressdate`='$_POST[expressdate]',`status`=2 WHERE id='$_POST[id]'";
		$result=mysql_query($sql);
		$row=mysql_fetch_row($result);
		if (!$row['expressname'])
		{

		echo "<script>alert('修改成功');window.location='main.php'</script>";
	}
		}
?>