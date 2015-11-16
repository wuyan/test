<?php
ini_set("display_errors","Off");
include('configure/conn.php');
$query = "SELECT * FROM orderform Orders ORDER BY id DESC";
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

//$a="<a href=huanjianzaitu.php?id=".$row['id']." ><font color=#f4500>编辑订单状态</font></a>";

$customer_name=mysql_query("select * from yhxx where customer_id =$row[customer] ");
$row_customer=mysql_fetch_array($customer_name);
$query_status = "SELECT * FROM state where state_id=$row[status]";
$result_status = mysql_query($query_status) or die("SQL Error 1: " . mysql_error());
$row_status = mysql_fetch_array($result_status);
$city_name=mysql_query("select * from city where city_id =$row[city] ");
$row_city=mysql_fetch_array($city_name);
if($row['id'] > 0  and $row['id'] < 10){
	$rowid="0000".$row[id];
}elseif( $row['id'] < 100){
	$rowid="000".$row[id];
}elseif( $row['id'] < 1000){
	$rowid="00".$row[id];
}elseif( $row['id'] < 10000){
	$rowid="0".$row['id'];
}elseif( $row['id'] > 10000){
	$rowid=$row['id'];
}
$employees[] = array(
		
		'id' => $rowid,
		'customer' => $row_customer['lianxiren'],
		'number' => $row['number'],
		'status' => $row_status['state'],
		'time' => $row['time'],
		'city'=>$row_city['city'],
		'address'=>$row['address'],
		//'operation'=>$a
);
}
echo json_encode($employees);
?>