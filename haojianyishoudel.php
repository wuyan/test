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
		 });
		 </script>
    </head>
    
    <body>
          <?php 
		  include ("top1.php");
		  ?>





		  <form  name='form' method='post' action="huanjianzaitudel1.php" id="jiahe">
            <div style="height:600px;width:1000px;border:1px solid #66CCFF;margin:100 auto;">
               
                    
                    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:300;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin:30px auto auto 35%;">
                        订单号码:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:30px;width:173px;height:21px;">
                        <?php if($_GET['id']<10) 
						{ echo "0000".$_GET['id'];
						} elseif($_GET['id']<100){
						echo "000".$_GET['id'];} elseif($_GET['id']<1000){
						echo "00".$_GET['id'];} elseif($_GET['id']<10000){
						echo "0".$_GET['id'];}elseif($_GET['id']>10000){
						echo  $_GET['id'];}  ?>
                    </div>
					<div style="float:left; margin-top:20px; font-family:'Arial Normal', 'Arial';font-weight:300;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:35%;">
                        客户信息:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:20px;width:173px;height:21px;font-style:normal;font-size:13px;">
				   <?php	include('configure/conn.php');
							$query = "SELECT * FROM orderform where id=$_GET[id]";
							$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
							$row = mysql_fetch_array($result);
							$query_customer = "SELECT * FROM yhxx where customer_id=$row[customer]";
							$result_customer = mysql_query($query_customer) or die("SQL Error 1: " . mysql_error());
							$row_customer = mysql_fetch_array($result_customer);
							echo $row_customer['lianxiren'] ?> 
                    </div>
					<div style="float:left; margin-top:20px; font-family:'Arial Normal', 'Arial';font-weight:300;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:35%;">
                         订单壮态:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:20px;font-style:normal;font-size:13px;width:173px;height:21px;">
				  <?php     $query_status = "SELECT * FROM state where state_id=$row[status]";
							$result_status = mysql_query($query_status) or die("SQL Error 1: " . mysql_error());
							$row_status = mysql_fetch_array($result_status);
							echo $row_status['state'] ?> 
                   </div>
				   <div style="float:left; margin-top:20px; font-family:'Arial Normal', 'Arial';font-weight:300;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:35%;">
                         发货日期:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:20px;width:173px;height:21px;font-style:normal;font-size:13px;">
				  <?php     $query = "SELECT * FROM orderform where id=$_GET[id]";
							$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
							$row = mysql_fetch_array($result);
							echo $row['fahuoshijian'] ?> 
                   </div>

					<div style="font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;line-height:normal;margin-left:20px;margin-top:230px">
                        物品型号:
                    </div>

                   <div style="float:left;margin-left:90px;margin-top:-15px;100px;height:21px;font-size:13px;">
				   <?php echo $row['haojianname'] ?> 
                    </div>
                   <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin:-15 auto auto 100px;">
                        快递单号:
                    </div>

                   <div style="float:left;margin:-15 auto auto 160px;width:100px;height:21px;font-size:13px;">
				  <?php echo $row['kuaididanhao'] ?> 
                    </div>
					
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin:-15 auto auto 30px;">
                       物品数量:
                    </div>

                    <div style="float:left;margin:-15 auto auto 90px;width:100px;height:21px;font-size:13px;">
				   <?php echo $row['haojiannumber'] ?> 
                    </div>
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin:-15 auto auto 30px;">
                       条形码:
                    </div>

                    <div style="float:left;margin:-15 auto auto 90px;width:100px;height:21px;font-size:13px;">
				   <?php echo $row['tiaoxingma'] ?>
                    </div>
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin:200px auto auto 350px;">
                        验收结果:
                    </div>

                   <div style="float:left;margin:200 auto auto 20px;">
                        <input type="text" name="yanshoujieguo" style="width:100px;height:21px;"  value="<?php echo $row['ysjg'] ?>" />
                   </div>
				   <input type="hidden"  name="id" value="<?php echo $_GET['id']; ?>" />
					<div style="margin-top:300px;height:30px;">
						<div style="float:left;margin-left:25%;">
							<div onclick='javascript:form.submit();' style="margin-left:150px;margin-top:10px;background-image:url('images/新建订单/u16.png');width: 100px;height: 30px;color:#FFFFFF;text-align:center;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;text-align:center;line-height:normal;line-height:30px;">
                            删除
							</div>
						</div>
					</div>
			</div>
		</form>
            	
    </body>

</html>