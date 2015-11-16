<html>
    <head>
        <title>
            Wlan维保项目
        </title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <link href="data/styles.css" type="text/css" rel="stylesheet">
        <link href="files/登陆页面/styles.css" type="text/css" rel="stylesheet">
    </head>
    <form action='login.php' method="POST">
    <body>
	<?php 
		include("top.php");
	?>
	<div class="kuang" style="background-image:url(images/登陆页面/u7.png); background-color:#006699; width:510px;height:310px;margin-top:100px; margin-left:auto; margin-right:auto;">
		<div style="width:510px;height:140px;">
			<div class="LoginFromItemTxt" style="float: left;width: 50px;height: 22px;text-align: right;margin-top:80px;margin-left:100px; font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal; font-size:13px;color:#333333;text-align:left;line-height:normal;">用户名:</div>
			<input name="username" type="text" class="inputText" maxlength="20"  style="padding: 2px;width: 150px;font-size: 12px;font-family: 'lucida grande',tahoma;border-top: 1px solid #7C7C7C;border-left: 1px solid #7C7C7C;border-right: 1px solid #DDD;border-bottom: 1px solid #DDD;background-color: #FFF;float:left;margin-top:80px;margin-left:20px;">
		</div>
		<div>
			<div class="LoginFromItemTxt" style="float: left;width: 50px;height: 22px;text-align: right;margin-left:100px;font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal; font-size:13px;color:#333333;text-align:left;line-height:normal;">密 码:</div>
			<input name="password" type="password" class="inputText" maxlength="20"  style="padding: 2px;width: 150px;font-size: 12px;font-family: 'lucida grande',tahoma;border-top: 1px solid #7C7C7C;border-left: 1px solid #7C7C7C;border-right: 1px solid #DDD;border-bottom: 1px solid #DDD;background-color: #FFF;margin-left:20px;">
		</div>
		<div style="margin-top:20px;margin-left:180px;"><input name="submit" class="btnSubmit" type="submit" value="登 录"></div>

     </form>
    </body>

</html>