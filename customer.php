<html>

    <head>
        <title>
            Wlan维保项目
        </title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="data/styles.css" type="text/css" rel="stylesheet" />
        <link href="files/登陆页面/styles.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="jqxwidget/jqwidgets/styles/jqx.base.css"
        type="text/css" />
        <link rel="stylesheet" href="jqxwidget/jqwidgets/styles/jqx.bootstrap.css"
        type="text/css" />
        <script type="text/javascript" src="jqxwidget/scripts/jquery-1.11.1.min.js">
        </script>
        <script type="text/javascript" src="jqxwidget/scripts/demos.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxcore.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxtabs.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxcheckbox.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxmenu.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxgrid.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxgrid.selection.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxbuttons.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxscrollbar.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxlistbox.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxdropdownlist.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxdata.js">
        </script>
        <script type="text/javascript" src="jqxwidget/jqwidgets/jqxchart.js">
        </script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('#addorder').hide();
                $('#customer').hide();
				$('#tongji').hide();
                // Create jqxTabs.
                $('#jqxTabs').jqxTabs({
                    width: '90%',
                    height: 400,
                    position: 'top',
                    theme: 'bootstrap'
                });
                var source = {
                    datatype: "json",
                    datafields: [{
                        name: 'id',
                        type: 'String'
                    },
                    {
                        name: 'customer',
                        type: 'String'
                    },
                    {
                        name: 'number',
                        type: 'String'
                    },
                    {
                        name: 'status',
                        type: 'String'
                    },
                    {
                        name: 'time',
                        type: 'String'
                    },
                    {
                        name: 'city',
                        type: 'String'
                    },
					
                    ],
                    url: 'init1.php',
                    cache: false,
                    id: 'id',
                    pagesize: 20,
                    root: 'Rows'

                };
                var dataAdapter = new $.jqx.dataAdapter(source, {
                    async: false,
                    loadError: function(xhr, status, error) {
                        alert('Error loading "' + source.url + '" : ' + error);
                    }
                });
                $("#jqxGrid").jqxGrid({
                    theme: 'bootstrap',
                    width: '800',
                    height: '300',
                    source: dataAdapter,
                    columns: [{
                        text: '序号',
                        datafield: 'id',
                        width: 100
                    },
                    {
                        text: '客户信息',
                        datafield: 'customer',
                        width: 150
                    },
                    {
                        text: '电话',
                        datafield: 'number'
                    },
                    {
                        text: '电子邮箱',
                        datafield: 'status'
                    },
                    {
                        text: '操作',
                        datafield: 'time'
                    },
                    {
                        text: '操作',
                        datafield: 'city'
                    }
					]
                });

                var source = {
                    datatype: "json",
                    datafields: [{
                        name: 'id',
                        type: 'String'
                    },
                    {
                        name: 'customer',
                        type: 'String'
                    },
                    {
                        name: 'number',
                        type: 'String'
                    },
                    {
                        name: 'status',
                        type: 'String'
                    },
                    {
                        name: 'time',
                        type: 'String'
                    },
                    {
                        name: 'city',
                        type: 'String'
                    },
                    {
                        name: 'operation',
                        type: 'String'
                    },
                    ],
                    url: 'init1.php',
                    cache: false,
                    id: 'id',
                    pagesize: 20,
                    root: 'Rows'

                };
                
               
            });
        </script>
		
		
    </head>
    
    <body>
        <?php include ("top1.php");?>
            <div style="background-color:#F2F2F2;height:500px;width:1200px;border:1px solid #6699CC;margin:30 auto;">
                <div id="jqxWidget">
                    <div id="jqxTabs" style="margin-left:auto; margin-right:auto; margin-top:30px;">
                        <ul>
                            <li style="margin-left: 30px;">
                                客户信息
                            </li>
					    </ul>
                        <div>
                            <div id="jqxGrid" style="margin-left:20px;margin-top:20px;">
                            </div>
                        </div>
                    </div>
                <form action=addyhxx.php method="POST">
		<div style=" margin-top:-70px; margin-left:900px;" >
		              <input name=text1 type=submit value="添加" style="background-image:url('images/新建订单/u16.png');width: 100px;height: 30px;color:#FFFFFF;text-align:center;  font-family:'Arial Normal', 'Arial';font-weight:400;font-style:normal;font-size:13px;text-align:center;line-height:normal;line-height:30px;" ></input>
		             </div>
		</form>
				</div>
           
			</div>

        </div>
    </body>

</html>