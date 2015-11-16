<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <head>
        <title>
             Wlan维保项目
        </title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link href="data/styles.css" type="text/css" rel="stylesheet">
        <link href="files/��½ҳ��/styles.css" type="text/css" rel="stylesheet">
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
		  <form  name='form' method='post' action="haojianzaitu1.php" id="jiahe1">
            <div style="height:800px;width:1000px;border:1px solid #66CCFF;margin:10 auto;" id="jiahe">
			<div style="margin-top:10px;height:30px;">
                    
                    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:35%;margin-top:20px;">
                    
						订单号码:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:20px;width:173px;height:21px;font-size:13px;">
                        <?php if($_GET['id']<10) 
						{ echo "0000".$_GET['id'];
						} elseif($_GET['id']<100){
						echo "000".$_GET['id'];} elseif($_GET['id']<1000){
						echo "00".$_GET['id'];} elseif($_GET['id']<10000){
						echo "0".$_GET['id'];} elseif($_GET['id']>10000){
						echo $_GET['id'];}?> 
						
                    </div>
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:35%;margin-top:20px;">
                      客户信息:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:20px;font-size:13px;width:173px;height:21px;">
				   <?php	include('configure/conn.php');
							$query = "SELECT * FROM orderform where id=$_GET[id]";
							$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
							$row = mysql_fetch_array($result);
							$query_customer = "SELECT * FROM yhxx where customer_id=$row[customer]";
							$result_customer = mysql_query($query_customer) or die("SQL Error 1: " . mysql_error());
							$row_customer = mysql_fetch_array($result_customer);
							echo $row_customer['lianxiren'] ?> 
                    </div>
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:35%;margin-top:20px;">
                       订单壮态:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:20px;width:173px;height:21px;font-size:13px;">
				  <?php     $query_status = "SELECT * FROM state where state_id=$row[status]";
							$result_status = mysql_query($query_status) or die("SQL Error 1: " . mysql_error());
							$row_status = mysql_fetch_array($result_status);
							echo $row_status['state'] ?> 
                    </div>
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:35%;margin-top:20px;">
                      地市名称:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:20px;width:173px;height:21px;font-size:13px;">
				  <?php     $query_status = "SELECT * FROM city where city_id=$row[city]";
							$result_status = mysql_query($query_status) or die("SQL Error 1: " . mysql_error());
							$row_status = mysql_fetch_array($result_status);
							echo $row_status['city'] ?> 
                    </div>
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:370px;margin-top:20px;">
                      出  库:
                    </div>

                   <div style="float:left;margin-left:20px;margin-top:20px;width:173px;height:21px;font-size:13px;">
				 
							
                       好件库
                    </div>
             </div>
			 <div style="height:500px;width:500px;border:0px solid #66CCFF; margin: 43px auto auto 60px ; float:left;" id="jiahe2">
			 <div style="color=blue;margin-top:10px;background-image:url('images/新建订单/u16.png');width: 100px;height: 30px;color:#FFFFFF;text-align:center;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;line-height:normal;line-height:30px;margin-left:30%;">物品入库</div>
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-top:30px">
                        物品型号:
                    </div>

                   <div style="float:left;margin-left:20px;width:100px;height:21px;margin-top:30px;font-size:13px;">
				   <?php echo $row['wpname'] ?> 
                    </div>
					<div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:20px;margin-top:30px">
                        物品数量:
                    </div>

                   <div style="float:left;margin-left:16px;width:100px;height:21px;margin-top:30px;font-size:13px;">
					<?php echo $row['number'] ?> 
                    </div>
					<div style="font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;line-height:normal;margin-left:px;margin-top:85px;">
                        快递单号:
                    </div>

                   <div style="float:left;margin-left:75px;margin-top:-15px;width:100px;height:21px;font-size:13px;">
				  <?php echo $row['expresscard'] ?>
                    </div>
					
				  <div style="float:left;margin-top:-15px;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:55%;line-height:normal;margin-left:20px;">
                       条形码:
                  </div>
					<div   style="float:left;margin-left:90px;margin-top:30px;margin-top:-15px;width:100px;height:21px;font-size:13px">
							<?php     $query = "SELECT * FROM orderform where id=$_GET[id]";
							$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
							$row = mysql_fetch_array($result);
							
							echo $row['barcode'] ?>
					</div>
					 <div style="margin-top:30px;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;line-height:normal;margin-left:0px;">
                        是否返修过:
                  </div>
				<div style="float:left;margin-left:77px;margin-top:-15px;font-size:13px;width:100px;height:21px;font-size:13px;">
                    <?php echo $row['repair'] ?> 
				</div>
				<div style="margin-top:238px;height:30px;">
                    <div style="float:left;margin-left:45px;">
                        <div onclick='javascript:form.submit();' style="margin-left:110px;color=blue;margin-top:10px;background-image:url('images/新建订单/u16.png');width: 100px;height: 30px;color:#FFFFFF;text-align:center;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;text-align:center;line-height:normal;line-height:30px;">
                            保存
                        </div>
                    </div>
                </div>
             </div>	
					
			<div style="height:500px;width:500px;border:0px solid #66CCFF;margin:230 auto auto 505; float:top;" id="jiahe3">
				<div style=";color=blue;margin-top:10px;background-image:url('images/新建订单/u16.png');width: 100px;height: 30px;color:#FFFFFF;text-align:center;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;text-align:center;line-height:normal;line-height:30px;margin-left:35%;">物品出库</div>
                <div style="margin-top:50px;height:30px;margin-left:20px;">
                    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-top:-20px;margin-left:-20px">
                        发出物品:
                    </div>
                    <div style="float:left;margin-left:40px;margin-top:-20px">
                    <input type="text" name="haojianname" style="width:100px;height:21px;" />
                  </div>
				  <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:20px;margin-top:-20px;">
                        数量:
                  </div>
				<div style="float:left;margin-left:70px;margin-top:-20px;">
                        <input type="text" name="haojiannumber" style="width:100px;height:21px;" />
						<input type="hidden"  name="id" value="<?php echo $_GET['id']; ?>" />
                 </div>
				 <!-- <div style="float:left; margin-left:10px; font-family:'Arial Normal','Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:left;line-height:normal;">
                        快递公司:
                    </div>
                   <div style="float:left;margin-left:10px;">
                    <input type="text" name="kuaidigongsi" style="width:100px;height:21px;" />
                  </div> -->
				  <div style="float:left;  font-family:'Arial Normal','Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:-330px;margin-top:30px">
                        快递单号:
                    </div>
                   <div style="margin-top:30px;float:left;margin-left:-270px;">
                    <input type="text" name="kuaididanhao" style="width:100px;height:21px;" />
                  </div>
				   <div style="float:left;margin-top:30px;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:-150px;">
                       条形码:
                  </div>
					<div style="float:left;margin-left:-100px;margin-top:30px;">
							<input type="text" name="tiaoxingma" style="width:100px;height:21px;" />
					</div>
					 <div style="float:left;margin-top:30px;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:103px;">
                        是否返修过:
                  </div>
				<div style="float:left;margin-left:10px;margin-top:30px;font-size:13px;">
                    <input type="radio" name="fanxiu" value="是">是</input>  
					<input type="radio" name="fanxiu" value="否">否</input> 
				</div>
				  <!--<div style="float:left;  font-family:'Arial Normal','Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:30px;">
                        发货时间:
                    </div>
                   <div style="float:left;margin-left:10px;">
                    <input type="text" name="fahuoshijian" style="width:100px;height:21px;" />
                  </div>-->
               </div>
                <div style="margin-top:300px;height:30px;">
                    <div style="float:left;margin-left:45px;">
                        <div onclick='javascript:form.submit();' style="margin-left:80px;color=blue;margin-top:10px;background-image:url('images/新建订单/u16.png');width: 100px;height: 30px;color:#FFFFFF;text-align:center;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;text-align:center;line-height:normal;line-height:30px;">
                            确认
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