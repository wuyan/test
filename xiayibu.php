﻿<!DOCTYPE html>
<html>
  <head>
    <title>新建下一步</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/新建下一步/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="resources/scripts/axure/axQuery.js"></script>
    <script src="resources/scripts/axure/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/axure/annotation.js"></script>
    <script src="resources/scripts/axure/axQuery.std.js"></script>
    <script src="resources/scripts/axure/doc.js"></script>
    <script src="data/document.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/axure/events.js"></script>
    <script src="resources/scripts/axure/action.js"></script>
    <script src="resources/scripts/axure/expr.js"></script>
    <script src="resources/scripts/axure/geometry.js"></script>
    <script src="resources/scripts/axure/flyout.js"></script>
    <script src="resources/scripts/axure/ie.js"></script>
    <script src="resources/scripts/axure/model.js"></script>
    <script src="resources/scripts/axure/repeater.js"></script>
    <script src="resources/scripts/axure/sto.js"></script>
    <script src="resources/scripts/axure/utils.temp.js"></script>
    <script src="resources/scripts/axure/variables.js"></script>
    <script src="resources/scripts/axure/drag.js"></script>
    <script src="resources/scripts/axure/move.js"></script>
    <script src="resources/scripts/axure/visibility.js"></script>
    <script src="resources/scripts/axure/style.js"></script>
    <script src="resources/scripts/axure/adaptive.js"></script>
    <script src="resources/scripts/axure/tree.js"></script>
    <script src="resources/scripts/axure/init.temp.js"></script>
    <script src="files/新建下一步/data.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- Unnamed (新母版 1) -->

      <!-- Unnamed (形状) -->
      <div id="u1" class="ax_形状">
        <img id="u1_img" class="img " src="images/登陆页面/u1.png"/>
        <!-- Unnamed () -->
        <div id="u2" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u3" class="ax_形状">
        <img id="u3_img" class="img " src="images/登陆页面/u3.png"/>
        <!-- Unnamed () -->
        <div id="u4" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u5" class="ax_文本段落">
        <img id="u5_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u6" class="text">
          <p><span>IDCJMS 哈尔滨佳禾网络科技有限公司WLAN 维保项目</span></p>
        </div>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u7" class="ax_形状">
        <img id="u7_img" class="img " src="images/新建下一步/u7.png"/>
        <!-- Unnamed () -->
        <div id="u8" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u9" class="ax_文本段落">
        <img id="u9_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u10" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- 物品数量 (形状) -->
      <div id="u11" class="ax_文本段落" data-label="物品数量">
        <img id="u11_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u12" class="text">
          <p><span>地址：</span></p>
        </div>
      </div>

      <!-- 物品数量框 (文本框) -->
      <div id="u13" class="ax_文本框" data-label="物品数量框">
        <input id="u13_input" type="text" value=""/>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u14" class="ax_文本段落">
        <img id="u14_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u15" class="text">
          <p><span>客户信息：</span></p>
        </div>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u16" class="ax_文本段落">
        <img id="u16_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u17" class="text">
          <p><span>状态</span><span>：</span></p>
        </div>
      </div>

      <!-- Unnamed (下拉列表框) -->
      <div id="u18" class="ax_下拉列表框">
        <select name="customer" value=<?php echo $row_exist['customer'];  ?> style="width:1000px;" >
						<?php 
						error_reporting(E_ALL^E_NOTICE^E_WARNING);
						echo "<option>".$row_exist['customer']."<?option>";
						include('configure/conn.php');
						$query = "SELECT state FROM state";
						$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
						while($row=mysql_fetch_array($result)){
						 echo "<option>".$row[state]."<?option>";
						   }
							?>

					</select>
      </div>

      <!-- Unnamed (文本框) -->
      <div id="u19" class="ax_文本框">
        <input id="u19_input" type="text" value="王玉洁"/>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u20" class="ax_形状">
        <img id="u20_img" class="img " src="images/首页1/u4.png"/>
        <!-- Unnamed () -->
        <div id="u21" class="text">
          <p><span>订单</span></p>
        </div>
      </div>

      <!-- 新建订单 (形状) -->
      <div id="u22" class="ax_文本段落" data-label="新建订单">
        <img id="u22_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u23" class="text">
          <p><span>新建订单</span></p>
        </div>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u24" class="ax_形状">
        <img id="u24_img" class="img " src="images/首页1/u4.png"/>
        <!-- Unnamed () -->
        <div id="u25" class="text">
          <p><span>客户信息</span></p>
        </div>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u26" class="ax_形状">
        <img id="u26_img" class="img " src="images/首页1/u4.png"/>
        <!-- Unnamed () -->
        <div id="u27" class="text">
          <p><span>已完成订单</span></p>
        </div>
      </div>

      <!-- 新建客户 (形状) -->
      <div id="u28" class="ax_文本段落" data-label="新建客户">
        <img id="u28_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u29" class="text">
          <p><span>客户信息</span><span>维护</span></p>
        </div>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u30" class="ax_形状">
        <img id="u30_img" class="img " src="images/新建订单/u16.png"/>
        <!-- Unnamed () -->
        <div id="u31" class="text">
          <p><span>完成</span></p>
        </div>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u32" class="ax_文本段落">
        <img id="u32_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u33" class="text">
          <p><span>地市：</span></p>
        </div>
      </div>

      <!-- Unnamed (文本框) -->
      <div id="u34" class="ax_文本框">
        <input id="u34_input" type="text" value="富锦市二龙山小学"/>
      </div>

      <!-- Unnamed (形状) -->
      <div id="u35" class="ax_形状">
        <img id="u35_img" class="img " src="images/首页1/u4.png"/>
        <!-- Unnamed () -->
        <div id="u36" class="text">
          <p><span>首页</span></p>
        </div>
      </div>

      <!-- 发件日期 (形状) -->
      <div id="u37" class="ax_文本段落" data-label="发件日期">
        <img id="u37_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u38" class="text">
          <p><span>发件日期：</span></p>
        </div>
      </div>

      <!-- 发件日期框 (文本框) -->
      <div id="u39" class="ax_文本框" data-label="发件日期框">
        <input id="u39_input" type="text" value=""/>
      </div>

      <!-- 快递单号 (形状) -->
      <div id="u40" class="ax_文本段落" data-label="快递单号">
        <img id="u40_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u41" class="text">
          <p><span>快递单号：</span></p>
        </div>
      </div>

      <!-- 快递单号1 (文本框) -->
      <div id="u42" class="ax_文本框" data-label="快递单号1">
        <input id="u42_input" type="text" value="1237485"/>
      </div>
    </div>
  </body>
</html>
