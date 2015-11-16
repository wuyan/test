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
                        type: 'String',
							
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
                    
                    ],
                    url: 'init2.php',
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
                        text: '订单号',
                        datafield: 'id',
                        width: 100
                    },
                    {
                        text: '客户信息',
                        datafield: 'customer',
                        width: 80
                    },
                    {
                        text: '数量',
                        datafield: 'number',
							width: 80
                    },
                    {
                        text: '状态',
                        datafield: 'status',
							width: 100
                    },
                    {
                        text: '时间',
                        datafield: 'time',
							width: 100
                    },
                    {
                        text: '地市',
                        datafield: 'city',
							width: 100
                    },
					{
                        text: '地址',
                        datafield: 'address'
                    },
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
					{
                        name: 'edit',
                        type: 'String'
                    },
					{
                        name: 'delete',
                        type: 'String'
                    },
                    ],
                    url: 'init.php',
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
                $("#jqxGrid1").jqxGrid({
                    theme: 'bootstrap',
                    width: '900',
                    height: '300',
                    source: dataAdapter,
                    columns: [{
                        text: '订单号',
                        datafield: 'id',
                        width: 100
                    },
                    {
                        text: '客户信息',
                        datafield: 'customer',
                        width: 150
                    },
                    {
                        text: '状态',
                        datafield: 'status'
                    },
                    {
                        text: '时间',
                        datafield: 'time'
                    },
                    {
                        text: '地市',
                        datafield: 'city'
                    },
                    {
                        text: '下一步操作',
                        datafield: 'operation',
                        width: 100
                    },
					{
                        text: '编辑',
                        datafield: 'edit',
                        width: 60
                    },  
					{
                        text: '删除',
                        datafield: 'delete',
                        width: 60
                    },
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
                        name: 'expressname',
                        type: 'String'
                    },
					{
                        name: 'expresscard',
                        type: 'String'
                    },
                    {
                        name: 'operation',
                        type: 'String'
                    },
						{
                        name: 'edit',
                        type: 'String'
                    },
					{
                        name: 'delete',
                        type: 'String'
                    },
                    ],
                    url: 'huaijian1.php',
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
                $("#jqxGrid2").jqxGrid({
                    theme: 'bootstrap',
                    width: '1000',
                    height: '300',
                    source: dataAdapter,
                    columns: [{
                        text: '订单号',
                        datafield: 'id',
                        width: 100                   },
                    {
                        text: '客户信息',
                        datafield: 'customer',
                        width: 100
                    },
                    {
                        text: '状态',
                        datafield: 'status',
							width: 100
                    },
                    {
                        text: '时间',
                        datafield: 'time',
							width: 100
                    },
                    {
                        text: '地市',
                        datafield: 'city'
                    },
					{
                        text: '快递名称',
                        datafield: 'expressname'
                    },
					{
                        text: '快递单号',
                        datafield: 'expresscard'
                    },
                    {
                        text: '下一步操作',
                        datafield: 'operation'
                    },
					{
                        text: '编辑',
                        datafield: 'edit',
                        width: 60
                    },  
					{
                        text: '删除',
                        datafield: 'delete',
                        width: 60
                    }
					]
                });
					var dataAdapter = new $.jqx.dataAdapter(source, {
                    async: false,
                    loadError: function(xhr, status, error) {
                        alert('Error loading "' + source.url + '" : ' + error);
                    }
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
                        name: 'expressname',
                        type: 'String'
                    },
					{
                        name: 'expresscard',
                        type: 'String'
                    },
                    {
                        name: 'operation',
                        type: 'String'
                    },
					{
                        name: 'edit',
                        type: 'String'
                    },
					{
                        name: 'delete',
                        type: 'String'
                    },
                    ],
                    url: 'huanjian2.php',
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
                $("#jqxGrid3").jqxGrid({
                    theme: 'bootstrap',
                    width: '900',
                    height: '300',
                    source: dataAdapter,
                    columns: [{
                        text: '订单号',
                        datafield: 'id',
                        width: 50
                    },
                    {
                        text: '客户信息',
                        datafield: 'customer',
                        width: 100
                    },
                    {
                        text: '状态',
                        datafield: 'status'
                    },
                    {
                        text: '时间',
                        datafield: 'time',
							width: 100
                    },
                    {
                        text: '地市',
                        datafield: 'city',
							width: 80
                    },
					{
                        text: '条形码',
                        datafield: 'expressname',
							width: 100
                    },
					{
                        text: '快递单号',
                        datafield: 'expresscard',
							width: 100
                    },
                    {
                        text: '下一步操作',
                        datafield: 'operation'
                    },
					{
                        text: '编辑',
                        datafield: 'edit',
                        width: 60
                    },  
					{
                        text: '删除',
                        datafield: 'delete',
                        width: 60
                    },]
                });
					var dataAdapter = new $.jqx.dataAdapter(source, {
                    async: false,
                    loadError: function(xhr, status, error) {
                        alert('Error loading "' + source.url + '" : ' + error);
                    }
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
                        name: 'haojiannumber',
                        type: 'String'
                    },
					{
                        name: 'expressname',
                        type: 'String'
                    },
					{
                        name: 'expresscard',
                        type: 'String'
                    },
                    {
                        name: 'operation',
                        type: 'String'
                    },
					{
                        name: 'edit',
                        type: 'String'
                    },
					{
                        name: 'delete',
                        type: 'String'
                    },
                    ],
                    url: 'huanjian3.php',
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
                $("#jqxGrid4").jqxGrid({
                    theme: 'bootstrap',
                    width: '1000',
                    height: '300',
                    source: dataAdapter,
                    columns: [{
                        text: '订单号',
                        datafield: 'id',
                        width: 50
                    },
                    {
                        text: '客户信息',
                        datafield: 'customer',
						width: 100
						},
                    {
                        text: '状态',
                        datafield: 'status'
                    },
                    {
                        text: '发货时间',
                        datafield: 'time'
                    },
					{
                        text: '坏件库',
                        datafield: 'city'
						},
						{
                        text: '物品名称',
                        datafield: 'haojiannumber' 
                    },
					{
                        text: '好件库',
                        datafield: 'expressname'
                    },
					{
                        text: '物品名称',
                        datafield: 'expresscard'
                    },
                    {
                        text: '下一步操作',
                        datafield: 'operation'
                    },
					{
                        text: '编辑',
                        datafield: 'edit',
                        width: 60
                    },  
					{
                        text: '删除',
                        datafield: 'delete',
                        width: 60
                    },]
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
                        name: 'haojiannumber',
                        type: 'String'
                    },
					{
                        name: 'expressname',
                        type: 'String'
                    },
					{
                        name: 'expresscard',
                        type: 'String'
                    },
                    {
                        name: 'operation',
                        type: 'String'
                    },
                    {
                        name: 'edit',
                        type: 'String'
                    },
					{
                        name: 'delete',
                        type: 'String'
                    },
					],
                    url: 'huanjian4.php',
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
                $("#jqxGrid5").jqxGrid({
                    theme: 'bootstrap',
                    width: '1000',
                    height: '300',
                    source: dataAdapter,
                    columns: [{
                        text: '订单号',
                        datafield: 'id',
                        width: 100
                    },
                    {
                        text: '客户信息',
                        datafield: 'customer',
						},
                    {
                        text: '状态',
                        datafield: 'status'
                    },
                    {
                        text: '收货时间',
                        datafield: 'time'
                    },
					{
                        text: '物品名称',
                        datafield: 'city'
                    },
						{
                        text: '数量',
                        datafield: 'haojiannumber'
                    },
					{
                        text: '条形码',
                        datafield: 'expressname'
                    },
					{
                        text: '快递单号',
                        datafield: 'expresscard'
                    },
                    {
                        text: '完结',
                        datafield: 'operation'
                    },
					{
                        text: '编辑',
                        datafield: 'edit',
                        width: 50
                    },  
					{
                        text: '删除',
                        datafield: 'delete',
                        width: 50
                    },]
                });
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
                                所有
                            </li>
                            <li >
                                订单初始化
                            </li>
                            <li>
                                坏件再途
                            </li>
                            <li >
                                坏件已收
                            </li>
                            <li>
                                好件再途
                            </li>
                            <li>
                                好件已收
                            </li>
                        </ul>
                        <div>
                            <div id="jqxGrid" style="margin-left:20px;margin-top:20px;">
                            </div>
                        </div>
                        <div>
                            <div id="jqxGrid1" style="margin-left:20px;margin-top:20px;">
                            </div>
                        </div>
                        <div>
                            <div id="jqxGrid2" style="margin-left:20px;margin-top:20px;">
                            </div>
                        </div>
                        <div>
                            <div id="jqxGrid3" style="margin-left:20px;margin-top:20px;">
                            </div>
                        </div>
                        <div>
                            <div id="jqxGrid4" style="margin-left:20px;margin-top:20px;">
                            </div>
                        </div>
                        <div>
                            <div id="jqxGrid5" style="margin-left:20px;margin-top:20px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>