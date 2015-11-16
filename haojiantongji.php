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
                        name: 'time',
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
                        name: 'city',
                        type: 'String'
                    },
						{
                        name: 'address',
                        type: 'String'
                    },
						{
                        name: 'expresscard',
                        type: 'String'
                    },
					
                    ],
                    url: 'init4.php',
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
                        text: '订单号码',
                        datafield: 'id',
                        width: 100
                    },
                    {
                        text: '客户信息',
                        datafield: 'customer',
                        width: 100
                    },
					{
                        text: '物品',
                        datafield: 'time',
                        width: 100
                    },
                    {
                        text: '数量',
                        datafield: 'number'
                    },
                    {
                        text: '订单状态',
                        datafield: 'status'
                    },
                   
                    {
                        text: '地市',
                        datafield: 'city'
                    },
					{
                        text: '签收时间',
                        datafield: 'address'
                    },
					{
                        text: '快递单号',
                        datafield: 'expresscard'
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
                        name: 'address',
                        type: 'String'
                    },
                    {
                        name: 'expresscard',
                        type: 'String'
                    },
                    ],
                    url: 'init4.php',
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
                </div>
            </div>
        </div>
    </body>

</html>