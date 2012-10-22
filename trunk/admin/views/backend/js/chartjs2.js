if (Ext.Date) {
	Ext.Date.monthNames = ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"];

	Ext.Date.dayNames = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];

	Ext.Date.formatCodes.a = "(this.getHours() < 12 ? '上午' : '下午')";
	Ext.Date.formatCodes.A = "(this.getHours() < 12 ? '上午' : '下午')";

	parseCodes = {
		g: 1,
		c: "if (/(上午)/i.test(results[{0}])) {\n"
			+ "if (!h || h == 12) { h = 0; }\n"
			+ "} else { if (!h || h < 12) { h = (h || 0) + 12; }}",
		s: "(上午|下午)",
		calcAtEnd: true
	};

	Ext.Date.parseCodes.a = Ext.Date.parseCodes.A = parseCodes;
}

var store2 = Ext.create('Ext.data.JsonStore', {
	fields: ['name', 'suc', 'on'],
	data: [
			{name:"张三",data1: 40, data2: 50},
			{name:"李四",data1: 50, data2: 32}
		  ]
});


function generateData(){
    var data = [],
	data=[{name:"张三",data1:35,data2:28}];
    return data;
}
var store1 = new Ext.data.JsonStore({
    fields: ['name','data1','data2'],
    data: generateData()
});
Ext.onReady(function () {
    var chart;
    Ext.get('reloadData').on('click', function() {
        store1.loadData(generateData());
    });
	chart = new Ext.chart.Chart({
        width: 800,
        height: 500,
        animate: true,
        store: store2,
        renderTo: 'chart',
        shadow: true,
		legend: {
		  position: 'right'  
		},
        axes: [{
            type: 'Numeric',
            position: 'left',
            fields: ['data1','data2'],
            label: {
                renderer: Ext.util.Format.numberRenderer('0,0')
            },
            title: '一周成交笔数',
            grid: true,
            minimum: 0
        }, {
            type: 'Category',
            position: 'bottom',
            fields: ['name'],
            title: '交易员姓名'
        }],
        series: [{
            type: 'column',
            axis: 'bottom',
            highlight: true,
            xField: 'name',
			yField: ['data1', 'data2'],
			stacked: true,
        }]
    });
});