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
				 $('#tongji').hide();
				$('#jiahe').click(function() {
			  var newRow="<div style='margin-top:50px;height:30px;margin-left:20px;'><div style='float:left;  font-family:\"Arial Normal\",\"Arial\";font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:30px;'>物品名称:</div><div style='float:left;margin-left:10px;'><select name='customer' style='width:100px;height:21px;' ></select></div><div style='float:left;  font-family:\"Arial Normal\",\"Arial\";font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:20px;'>数量:</div><div style='float:left;margin-left:10px;'><input type='text' name='expresscard' style='width:100px;height:21px;' /></div></div>";
				$('#jiahe').append(newRow);  
				 });
				 
				 });

			
		 </script>
    </head>
    
    <body>
          <?php 
		  include ("top1.php");
		  ?>
		  <form  name='form' method='post' action="huanjianyishou1.php" id="jiahe">
            <div style="height:300px;width:500px;border:1px solid #66CCFF;margin:100 auto;" id="jiahe">
				<div>添加</div>
				<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                        订单号码:
                    </div>

                   <div style="float:left;margin-left:20px;">
                        <input type="text" name="expressname"  value=<?php echo $_GET['id'] ?> style="width:173px;height:21px;" />
                    </div>
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                        客户信息:
                    </div>

                   <div style="float:left;margin-left:20px;">
				   <?php	include('configure/conn.php');
							$query = "SELECT * FROM orderform where id=$_GET[id]";
							$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
							$row = mysql_fetch_array($result);
							$query_customer = "SELECT * FROM yhxx where customer_id=$row[customer]";
							$result_customer = mysql_query($query_customer) or die("SQL Error 1: " . mysql_error());
							$row_customer = mysql_fetch_array($result_customer);
							?>
                        <input value=<?php echo $row_customer['lianxiren'] ?> type="text" name="expressname"  style="width:173px;height:21px;" />
                    </div>
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                        订单壮态:
                    </div>

                   <div style="float:left;margin-left:20px;">
				  <?php     $query_status = "SELECT * FROM state where state_id=$row[status]";
							$result_status = mysql_query($query_status) or die("SQL Error 1: " . mysql_error());
							$row_status = mysql_fetch_array($result_status);
							?>
                        <input value=<?php echo $row_status['state'] ?> type="text" name="expressname"  style="width:173px;height:21px;" />
                    </div>
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                        快递单号:
                    </div>

                   <div style="float:left;margin-left:20px;">
				   <?php	include('configure/conn.php');
							$query = "SELECT * FROM orderform where id=$_GET[id]";
							$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
							$row = mysql_fetch_array($result);
							//$query_customer = "SELECT * FROM yhxx where //customer_id=$row[customer]";
							//$result_customer = mysql_query($query_customer) or die("SQL //Error 1: " . mysql_error());
							//$row_customer = mysql_fetch_array($result_customer);
							?>
                        <input value=<?php echo $row['expresscard'] ?> type="text" name="expressname"  style="width:173px;height:21px;" />
                    </div>
                <div style="margin-top:50px;height:30px;margin-left:20px;">
                    <div style="float:left;  font-family:'Arial Normal','Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:30px;">
                        物品名称:
                    </div>
                   <div style="float:left;margin-left:10px;">
                     <input type="text" name="wpname" style="width:100px;height:21px;" />
                  </div>
				  <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:20px;">
                        数量:
                  </div>
				<div style="float:left;margin-left:10px;">
                        <input type="text" name="number" style="width:100px;height:21px;" />
						<input type="hidden"  name="id" value="<?php echo $_GET['id']; ?>" />
                 </div>
               </div>
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