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
				 $('#tianjia').click(function() {
					  var newRow="<div style='margin-top:50px;height:30px;margin-left:20px;'><div style='float:left;  font-family:\"Arial Normal\",\"Arial\";font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:30px;'>物品名称:</div><div style='float:left;margin-left:10px;'>						  <select name='customer' style='width:100px;height:21px;' > </select>  </div>						  <div style='float:left;  font-family:\"Arial Normal\",\"Arial\";font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:20px;id=""'>						  数量:						  </div>						  <div style='float:left;margin-left:10px;'><input type='text' name='expresscard' style='width:100px;height:21px;' /></div></div>";
					  $('#tianjia').append(newRow);  
				 });
				 
				 });

			
		 </script>
    </head>
    
    <body>
         
		  <form  name='form' method='post' action="huanjianzaitudel1.php" id="jiahe">
            <div style="height:800px;width:1000px;border:1px solid #66CCFF;margin:100 auto;" id="jiahe">
				
				    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:400px;margin-top:30px">
                        订单号码:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:30px;width:173px;height:21px;font-style:normal;font-size:13px;">
                       <?php if($_GET['id']<10) 
						{ echo "0000".$_GET['id'];
						} elseif($_GET['id']<100){
						echo "000".$_GET['id'];} elseif($_GET['id']<1000){
						echo "00".$_GET['id'];} elseif($_GET['id']<10000){
						echo "0".$_GET['id'];}elseif($_GET['id']>10000){
						echo  $_GET['id'];} ?> 
                   </div>
				   <div style="float:left; margin-top:30px; font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:400px;">
                        客户信息:<br/>
                   </div>
                   <div style="float:left;margin-left:20px;margin-top:30px;width:173px;height:21px;font-style:normal;font-size:13px;">
				   <?php	include('configure/conn.php');
							$query = "SELECT * FROM orderform where id=$_GET[id]";
							$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
							$row = mysql_fetch_array($result);
							$query_customer = "SELECT * FROM yhxx where customer_id=$row[customer]";
							$result_customer = mysql_query($query_customer) or die("SQL Error 1: " . mysql_error());
							$row_customer = mysql_fetch_array($result_customer);
							echo $row_customer['lianxiren'] ?> 
                    </div>
					<div style="float:left; margin-top:30px; font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:400px;">
                        订单壮态:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:30px;width:173px;height:21px;font-style:normal;font-size:13px;">
				   
					  <?php     $query_status = "SELECT * FROM state where state_id=$row[status]";
								$result_status = mysql_query($query_status) or die("SQL Error 1: " . mysql_error());
								$row_status = mysql_fetch_array($result_status);
								echo $row_status['state'] ?> 
                   </div>
				   <div style="float:left; margin-top:30px; font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:400px;">
                         地市名称:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:30px;width:173px;height:21px;font-style:normal;font-size:13px;">
				  <?php     $query_status = "SELECT * FROM city where city_id=$row[city]";
							$result_status = mysql_query($query_status) or die("SQL Error 1: " . mysql_error());
							$row_status = mysql_fetch_array($result_status);
							echo $row_status['city'] ?> 
                    </div>
					<div style="float:left; margin-top:30px; font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:400px;">
                         地址名称:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:30px;width:173px;height:21px;font-style:normal;font-size:13px;">
				  <?php     $query_status = "SELECT * FROM orderform where id=$_GET[id]";
							$result_status = mysql_query($query_status) or die("SQL Error 1: " . mysql_error());
							$row_status = mysql_fetch_array($result_status);
							echo $row_status['address'] ?>
                    </div>
					<div style="float:left; margin-top:30px; font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:400px;">
                         收货日期:
                    </div>

					<div style="float:left;margin-left:20px;margin-top:30px;">
						<input  type="text" name="takegoods"  style="width:173px;height:21px;"  value="<?php echo $row['takegoods'] ?>" />
					</div>
					<div style="float:left; margin-top:30px; font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:400px;">
                         启用日期:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:30px;">
				  <!--<?php     $query_status = "SELECT * FROM orderform where id=$_GET[id]";
							$result_status = mysql_query($query_status) or die("SQL Error 1: " . mysql_error());
							$row_status = mysql_fetch_array($result_status);
							?>-->
                        <input  type="text" name="qiyongdate"  style="width:173px;height:21px;" value="<?php echo $row['qiyongdate'] ?>" />
                    </div>
					<div style="float:left; margin-top:30px; font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:400px;">
                         入库:
                    </div>

                   <div style="float:left;margin-left:50px;margin-top:30px;">
				 
                        <input value="坏件库"  type="text" name="badparts"  style="width:173px;height:21px;" />
                    </div>
				  <div style="margin-top:420px; margin-left:20px;width=50px;height:20px;font-size:13px;" id="tianjia"  >添加</div>
				  <div style=" margin-top:30px; /* font-family:'Arial Normal', 'Arial'; */ /* font-weight:400; */ font-style:normal; font-size:13px; color:#333333; /* text-align:center; */line-height:normal;margin-left:30px;weight:100px">
                        物品名称:
                    </div>
					<div style=" margin-top:-15px; /* font-family:'Arial Normal', 'Arial'; */ /* font-weight:400; */ font-style:normal; font-size:13px; color:#333333; /* text-align:center; */line-height:normal;margin-left:100px;weight:200px">
                   	 <input type="text" name="wpname" style="width:100px;height:21px;" value="<?php echo $row['wpname'] ?>">
					</div>
                   	 <div style="float:left; margin-top:-20px; font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:200px;">
                        快递单号:
                   </div>

                   <div style="float:left;margin-left:270px;margin-top:-20px;width:100px;height:21px;font-style:normal;font-size:13px;">
				   <?php	include('configure/conn.php');
							$query = "SELECT * FROM orderform where id=$_GET[id]";
							$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
							$row = mysql_fetch_array($result);
							echo $row['expresscard'] ?>
                    </div>
				  <div style="float:left;margin-top:-20px;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:10px;">
                        数量:
                  </div>
				<div style="float:left;margin-left:40px;margin-top:-20px;">
                        <input type="text" name="number" style="width:100px;height:21px;" value="<?php echo $row['number'] ?>" />
						<input type="hidden"  name="id" value="<?php echo $_GET['id']; ?>" />
                 </div>
				 <div style="float:left;margin-top:-20px;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:30px;">
                       条形码:
                  </div>
				<div style="float:left;margin-left:100px;margin-top:-20px;">
                        <input type="text" name="barcode" style="width:100px;height:21px;"value="<?php echo $row['barcode'] ?>" />
				</div>
				 <div style="float:left;margin-top:-20px;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:30px;">
                        是否返修过:
                  </div>
				<div style="float:left;margin-left:100px;margin-top:-20px;font-size:13px;">
                    <input type="text" name="repair" value="<?php echo $row['repair'] ?>" "/>  
					 
				</div>
               </div>
				
				
                <div style="margin-top:10px;height:30px;">
					
                    <div style="float:left;margin-left:40%;">
                        <div onclick='javascript:form.submit();' style="margin-left:150px;margin-top:-150px;background-image:url('images/新建订单/u16.png');width: 100px;height: 30px;color:#FFFFFF;text-align:center;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;text-align:center;line-height:normal;line-height:30px;">
                            删除
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