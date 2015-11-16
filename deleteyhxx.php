<html>
<?php        
		  include('configure/conn.php');
		  $a=$_GET['id'];
		  $query = "SELECT * FROM yhxx WHERE customer_id=$a";
				 		  ?>
    
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
          <?php include ("top1.php")?>
		  

		  <form  name='form' method='post' action="delete1.php" id="jiahe">
            <div style="height:300px;width:500px;border:1px solid #66CCFF;margin:100 auto;">
                <div style="margin-top:50px;height:30px;">
                    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                       
                    </div>
					<div style="float:left;margin-left:45px;">
                    
					<?php		
			            $result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
		                $row=mysql_fetch_array($result); ?>
					<input name=customer_id value="<?php echo $row['customer_id']; ?>" type="hidden">   					</input>
                  </div>
               </div>
                <div style="margin-top:10px;height:30px;">
                    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                        客户:
                    </div>
					
                    <div style="float:left;margin-left:45px;">
			         <?php		
			            $result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
		                $row=mysql_fetch_array($result); ?>
                       <input name="customer" style="width:155px;" 
					   value=<?php echo $row['lianxiren'];  ?>  ></input>
                    </div>
                </div>
					<div style="margin-top:10px;height:30px;">
                    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                        电话:
                    </div>
                    <div style="float:left;margin-left:45px;">
                         <?php		
			            $result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
		                $row=mysql_fetch_array($result); ?>
                       <input name="telephone" style="width:155px;" 
					   value=<?php echo $row['telephone'];  ?>  ></input>
                    </div>
                </div>
                <div style="margin-top:10px;height:30px;">
                    <div style="float:left;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;color:#333333;text-align:center;line-height:normal;margin-left:100px;">
                       邮箱:
                    </div>
                    <div style="float:left;margin-left:45px;">
                         <?php		
			            $result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
		                $row=mysql_fetch_array($result); ?>
                       <input name="email" style="width:155px;" 
					   value=<?php echo $row['email'];  ?>  ></input>
                    </div>
                
                <div style="margin-top:10px;height:30px;">
                    <div style="float:left;margin-left:45px;">
                        <div onclick='javascript:form.submit();' style="margin-left:150px;margin-top:10px;background-image:url('images/新建订单/u16.png');width: 100px;height: 30px;color:#FFFFFF;text-align:center;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;text-align:center;line-height:normal;line-height:30px;">
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