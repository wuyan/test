<meta http-equiv="Content-Type" content="text/html; chaRset=UTF-8">
<?php
error_reporting(0);
include ("configure/conn.php");

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "select * from user where user='$username' and password='$password'";
$result = mysql_query($sql);
if($result){


$row = mysql_fetch_array($result);


$ip=$_SERVER["REMOTE_ADDR"];  


mysql_query("update user set ip='$ip' where id=$row[id]");

$time= date('Y-m-d',time());
mysql_query("update user set lastlogintime='$time' where id=$row[id]");

mysql_query("update user set counterlog=counterlog+1 where id=$row[id]");

}
setcookie('manager' , $row[manager], time()+3600);
setcookie('id' , $row[id], time()+3600);
setcookie('authority' , $row[authority_id], time()+3600);



if (isset($row['manager']))
	{

	echo "<script>window.location='main.php'</script>";
}
else{

	echo "<script>alert('帐号或密码错误');window.location='index.php';</script>";
}




?>