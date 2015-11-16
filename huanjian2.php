<?php
ini_set("display_errors","Off");
include('configure/conn.php');
$query = "SELECT * FROM orderform where status=3";
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
$a="<a href=haojianzaitu.php?id=".$row['id']."><font color=#3399FF>下一步好件在途</a>";
$b="<a href=huanjianyishouedit.php?id=".$row['id']." ><font color=#3399FF>编辑</font></a>";
$c="<a href=huanjianyishoudel.php?id=".$row['id']." ><font color=#3399FF>删除</font></a>";
$customer_name=mysql_query("select * from yhxx where customer_id =$row[customer] ");
$row_customer=mysql_fetch_array($customer_name);
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
		'status' => '坏件已收',
		'time' => $row['time'],
		'city'=>$row_city['city'],
		'address'=>$row['address'],
		'expressname'=>$row['barcode'],
		'expresscard'=>$row['expresscard'],
		'operation'=>$a,
		'edit'=>$b,
		'delete'=>$c,
);
}
echo json_encode($employees);
?>