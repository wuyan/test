<meta http-equiv="content-type" content="text/html; charset=utf-8">

<?php
	error_reporting(0);
	if($_POST[number]==""||$_POST[wpname]==""||$_POST[qiyongdate]=="")
	{echo "<script>alert(修改失败');window.location='main.php';</script>";
	}
	else{
	include('configure/conn.php');
	$sql="UPDATE orderform SET `number`='$_POST[number]',`wpname`='$_POST[wpname]',`qiyongdate`='$_POST[qiyongdate]',`barcode`='$_POST[barcode]',`repair`='$_POST[repair]',`takegoods`='$_POST[takegoods]',`badparts`='$_POST[badparts]',`status`=3 WHERE id='$_POST[id]'";
	$result=mysql_query($sql);
	//echo $sql;
	$row=mysql_fetch_row($result);
		if (!$row['wpname'])
		{

		echo "<script>alert('修改成功');window.location='main.php'</script>";
		}
	}

	
?>