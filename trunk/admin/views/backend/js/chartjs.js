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
Ext.chart.theme.White = Ext.extend(Ext.chart.theme.Base, {
	constructor: function() {
	   Ext.chart.theme.White.superclass.constructor.call(this, {
		   axis: {
			   stroke: 'rgb(8,69,148)',
			   'stroke-width': 1
		   },
		   axisLabel: {
			   fill: 'rgb(8,69,148)',
			   font: '12px',
			   'font-family': '微软雅黑',
			   spacing: 2,
			   padding: 5,
			   renderer: function(v) { return v; }
		   },
		   axisTitle: {
			  font: '12px'
		   }
	   });
	}
});
var store2 = Ext.create('Ext.data.JsonStore', {
	fields: ['name', '报价笔数', '成交笔数'],
	data: [
			{name:"张三","报价笔数": 40, "成交笔数": 50},
			{name:"李四","报价笔数": 50, "成交笔数": 32},
			{name:"法克","报价笔数": 60, "成交笔数": 22},
			{name:"李四","报价笔数": 30, "成交笔数": 12},
			{name:"李四","报价笔数": 40, "成交笔数": 42},
			{name:"李四","报价笔数": 55, "成交笔数": 12},
			{name:"李四","报价笔数": 42, "成交笔数": 32},
			{name:"李四","报价笔数": 30, "成交笔数": 52},
			{name:"李四","报价笔数": 50, "成交笔数": 22},
			{name:"李四","报价笔数": 50, "成交笔数": 42},
			{name:"李四","报价笔数": 50, "成交笔数": 32},
			{name:"李四","报价笔数": 50, "成交笔数": 12},
			{name:"李四","报价笔数": 50, "成交笔数": 102}
		  ]
});
Ext.onReady(function () {
    var chart;
	chart = new Ext.chart.Chart({
        width: 1000,
        height: 400,
        animate: true,
        store: store2,
        renderTo: 'chart',
        shadow: true,
		legend: {
			position: 'top'
		},
        axes: [{
            type: 'Numeric',
            position: 'bottom',
            fields: ['报价笔数','成交笔数'],
            label: {
                renderer: Ext.util.Format.numberRenderer('0,0')
            },
            title: '一周成交笔数',
            grid: true,
            minimum: 0
        }, {
            type: 'Category',
            position: 'left',
            fields: ['name'],
			grid: true,
            minimum: 0
        }],
        series: [{
            type: 'Bar',
            axis: 'bottom',
            highlight: true,
            xField: 'name',
			yField: ['报价笔数','成交笔数'],
			stacked: true,
			tips: {
				trackMouse: true,
				width: 65,
				height: 28,
				renderer: function(storeItem, item) {
					this.setTitle(String(item.value[1]) + '笔');
				}
			},
			label: {
			  display: 'insideEnd',
				field: ['报价笔数','成交笔数'],
				renderer: Ext.util.Format.numberRenderer('0'),
				orientation: 'horizontal',
				color: '#fff',
			    'text-anchor': 'top'
			}
        }]
    });
});