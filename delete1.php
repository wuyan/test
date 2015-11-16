<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
include('configure/conn.php');
$id=$_POST['customer_id'];
$query=mysql_query("delete from yhxx where customer_id=$id");
if ($query) 
{   echo "<script>alert('删除成功');window.location='customer.php'</script>";
}
else{  echo "<script>alert('删除失败');window.location='customer.php'</script>";}
?>