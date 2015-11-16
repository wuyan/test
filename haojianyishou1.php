<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
	error_reporting(0);
	
			include('configure/conn.php');
			$date=date('Y-m-d');
			$sql="UPDATE orderform SET `ysjg`='$_POST[yanshoujieguo]',`status`=5,`qstime`='$date' WHERE `id`='$_POST[id]'";
			$result=mysql_query($sql);
			$row=mysql_fetch_row($result);
			if (!$row['ysjg'])
			{

			echo "<script>alert('修改成功');window.location='main.php'</script>";
				}
				else{
					echo "<script>alert('修改失败');window.location='main.php'</script>";
				}
			
			
		
	?>