<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <head>
        <title>
            Wlan维保项目
        </title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link href="data/styles.css" type="text/css" rel="stylesheet">
        <link href="files/登陆页面/styles.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="jqxwidget/scripts/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
            $(document).ready(function() {
				 $('#addorder').hide();
				 $('#customer').hide();
		 });
		 </script>
    </head>
    
    <body>
          <?php 
		  include ("top1.php")?>
		  <?php 
		  include('configure/conn.php');
		  $id=$_GET['id'];
		  $result=mysql_query("select * from orderform where id='$id'");
		  $row_exist = mysql_fetch_array($result); 
		  
        
?>




		  <form  name='form' method='post' action="update.php" id="jiahe">
            <div style="height:300px;width:500px;border:1px solid #66CCFF;margin:100 auto;">
                <div style="margin-top:50px;height:30px;">
                    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                        客户信息:
                    </div>

					
					
                  <div style="float:left;margin-left:20px;">
				   	 <select name="customer" value=<?php echo $row_exist['customer'];  ?>  style="width:155px;" >
						<?php 
						echo "<option>".$row_exist['customer']."</option>";
						$query = "SELECT lianxiren FROM yhxx";
						$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
						while($row=mysql_fetch_array($result)){
						 echo "<option>".$row[lianxiren]."<?option>";
						   }
							?>

					</select>
					</div>
               </div>
                <div style="margin-top:10px;height:30px;">
                    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                        状态:
                    </div>
                    <div style="float:left;margin-left:45px;">
                        <select name="status" value=<?php echo $row_exist['status'];?>  style="width:155px;" >
						<?php 
						error_reporting(E_ALL^E_NOTICE^E_WARNING);
						echo "<option>".$row_exist['status']."<?option>";
						include('configure/conn.php');
						$query = "SELECT state FROM state";
						$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
						while($row=mysql_fetch_array($result)){
						 echo "<option>".$row[state]."<?option>";
						   }
							?>

					</select>
                    </div>
                </div>
					<div style="margin-top:10px;height:30px;">
                    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                        地市:
                    </div>
                    <div style="float:left;margin-left:45px;">
                    <select name="city" value=<?php echo $row_exist['city'];?> style="width:155px;" >
						<?php 
						 echo "<option>".$row_exist['city']."</option>";
						$query = "SELECT city FROM city";
						$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
						while($row=mysql_fetch_array($result)){
						 echo "<option>".$row[city]."</option>";
						   }
							?>

					</select>
                    </div>
                </div>
                <div style="margin-top:10px;height:30px;">
                    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                        地址:
                    </div>
                    <div style="float:left;margin-left:45px;">
                        <input type="text" name="address" value=<?php echo $row_exist['address'];?> />
                    </div>
                <input name='id' type="hidden" value="<?php echo $_GET[id]?>"
                <div style="margin-top:10px;height:30px;">
                    <div style="float:left;margin-left:45px;">
                        <div onclick='javascript:form.submit();' style="margin-left:150px;margin-top:10px;background-image:url('images/新建订单/u16.png');width: 100px;height: 30px;color:#FFFFFF;text-align:center;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;text-align:center;line-height:normal;line-height:30px;">
                            修改
                        </div>
                    </div>
                </div>
				
					</form>
            </div>
        </div>
        </div>
        </div>
		
    </body>

</html>