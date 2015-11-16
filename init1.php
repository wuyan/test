<?php
error_reporting(0);
ini_set("display_errors","Off");
include('configure/conn.php');
$query = "SELECT * FROM yhxx ";
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
$a="<a href=updateyhxx.php?id=".$row['customer_id']." ><font color=#3399FF>修改</a>";
$b="<a href=deleteyhxx.php?id=".$row['customer_id']." ><font color=#3399FF>删除</a>";

$employees[] = array(
		
		'id' => $row['customer_id'],
		'customer' => $row['lianxiren'],
		'number' => $row['telephone'],
		'status' => $row['email'],
		'time' => $a,
		'city'=>$b,
		//'address'=>$b,
		//'operation'=>$a
);
}
echo json_encode($employees);
?>