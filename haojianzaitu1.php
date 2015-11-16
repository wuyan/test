<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
	error_reporting(0);
	if($_POST[haojianname]==""||$_POST[haojiannumber]==""||$_POST[kuaididanhao]=="")
	{echo "<script>alert('修改失败');window.location='main.php';</script>";
	}
	else{
		include('configure/conn.php');
		$date=date('Y-m-d');
		$sql="UPDATE orderform SET `haojianname`='$_POST[haojianname]',`haojiannumber`='$_POST[haojiannumber]',`kuaidigongsi`='$_POST[kuaidigongsi]',`tiaoxingma`='$_POST[tiaoxingma]',`fanxiu`='$_POST[fanxiu]',`status`=4,`kuaididanhao`='$_POST[kuaididanhao]',
		`fahuoshijian`='$date' WHERE id='$_POST[id]'";
		$result=mysql_query($sql);
		$row=mysql_fetch_row($result);
		if (!$row['expressname'])
		{

		echo "<script>alert('修改成功');window.location='main.php'</script>";
	}
		}
?>