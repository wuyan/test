<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
include('configure/conn.php');
$id=$_POST['id'];
$query=mysql_query("delete from orderform where id=$id");
if ($query) 
{   echo "<script>alert('删除成功');window.location='main.php'</script>";
}
else{  echo "<script>alert('删除失败');window.location='main.php'</script>";}
?>