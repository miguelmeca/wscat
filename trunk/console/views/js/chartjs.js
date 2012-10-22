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

function generateData(n){
    var data = [],
        p = (Math.random() *  11) + 1,
        i;
    for (i = 0; i < (n || 12); i++) {
        data.push({
            name: Ext.Date.monthNames[i],
            data1: Math.floor(Math.max((Math.random() * 100), 20)),
            data2: Math.floor(Math.max((Math.random() * 100), 20)),
            data3: Math.floor(Math.max((Math.random() * 100), 20)),
            data4: Math.floor(Math.max((Math.random() * 100), 20)),
            data5: Math.floor(Math.max((Math.random() * 100), 20)),
            data6: Math.floor(Math.max((Math.random() * 100), 20)),
            data7: Math.floor(Math.max((Math.random() * 100), 20)),
            data8: Math.floor(Math.max((Math.random() * 100), 20)),
            data9: Math.floor(Math.max((Math.random() * 100), 20))
        });
    }
    return data;
}

function getData(n){
    var data = [],
        i;
	var json=eval("({sitename:1,sitedate:new Date(1980, 12, 17, 12, 0, 0)})"); 
    for (i = 0; i < (n || 7); i++) {
        data.push({
            name: Ext.Date.dayNames[i],
            data1: json.sitename,
        });
    }
    return data;
}

function generateDataNegative(n){
    var data = [],
        p = (Math.random() *  11) + 1,
        i;
    for (i = 0; i < (n || 12); i++) {
        data.push({
            name: Ext.Date.monthNames[i],
            data1: Math.floor(((Math.random() - 0.5) * 100)),
            data2: Math.floor(((Math.random() - 0.5) * 100)),
            data3: Math.floor(((Math.random() - 0.5) * 100)),
            data4: Math.floor(((Math.random() - 0.5) * 100)),
            data5: Math.floor(((Math.random() - 0.5) * 100)),
            data6: Math.floor(((Math.random() - 0.5) * 100)),
            data7: Math.floor(((Math.random() - 0.5) * 100)),
            data8: Math.floor(((Math.random() - 0.5) * 100)),
            data9: Math.floor(((Math.random() - 0.5) * 100))
        });
    }
    return data;
}

var store1 = new Ext.data.JsonStore({
    fields: ['name', 'data1'],
    data: generateData()
});
var storeNegatives = new Ext.data.JsonStore({
    fields: ['name', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data9', 'data9'],
    data: generateDataNegative()
});
var store3 = new Ext.data.JsonStore({
    fields: ['name', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data9', 'data9'],
    data: generateData()
});
var store4 = new Ext.data.JsonStore({
    fields: ['name', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data9', 'data9'],
    data: generateData()
});
var store5 = new Ext.data.JsonStore({
    fields: ['name', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data9', 'data9'],
    data: generateData()
});
Ext.onReady(function () {
    var chart;

    Ext.get('reloadData').on('click', function() {
        store1.loadData(getData(6));
    });

    Ext.chart.theme.White = Ext.extend(Ext.chart.theme.Base, {
        constructor: function() {
           Ext.chart.theme.White.superclass.constructor.call(this, {
               axis: {
                   stroke: 'rgb(8,69,148)',
                   'stroke-width': 1
               },
               axisLabel: {
                   fill: 'rgb(8,69,148)',
                   font: '12px Lucida Grande',
                   'font-family': '"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif',
                   spacing: 2,
                   padding: 5,
                   renderer: function(v) { return v; }
               },
               axisTitle: {
                  font: 'bold 18px Lucida Grande'
               }
           });
        }
    });

    chart = new Ext.chart.Chart({
        renderTo: 'chart',
        width: 600,
        height: 400,
        animate: true,
        store: store1,
        theme: 'White',
        axes: [{
            type: 'Numeric',
            position: 'bottom',
            fields: ['data1'],
            label: {
               renderer: Ext.util.Format.numberRenderer('0,0')
            },
            title: '点击次数'
        }, {
            type: 'Category',
            position: 'left',
            fields: ['name'],
            title: '年份'
        }],
        series: [{
            type: 'bar',
            axis: 'bottom',
            xField: 'name',
            yField: 'data1',
            highlight: true,
            label: {
                display: 'insideEnd',
                field: 'data1',
                renderer: Ext.util.Format.numberRenderer('0'),
                orientation: 'horizontal',
                color: '#333',
               'text-anchor': 'middle'
            }
        }]
    });
});