<?php
$user=$_POST["username"];
$psw=$_POST["password"];


if(!$user||!$psw)
{
		header("Location: ./login.php"); 
}	
else
{
	$con= mysql_connect("localhost","root");
	mysql_select_db("wlan");
	mysql_query("set character set 'gbk'");
	mysql_query("set names 'gbk'");
	$result =mysql_query("select user,password from user where user='$user' and password='$psw'");
	$num = mysql_fetch_row($result);

    if($num)
    {header("Location: ./main.php");
    
           }
  else {header("Location: ./login.php");
 
            }    
}           
?>