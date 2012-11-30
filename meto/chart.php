<?php 
include "lessc.inc.php";
$less = new lessc('less/chart.less');
file_put_contents('css/chart.css', $less->parse());
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>找钢网首页</title>
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<link rel="stylesheet" href="css/3d.css" />
<link rel="stylesheet" href="css/chart.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/bootstrap-transition.js"></script>
<script type="text/javascript" src="js/bootstrap-alert.js"></script>
<script type="text/javascript" src="js/bootstrap-tab.js"></script>
<script type="text/javascript" src="js/bootstrap-mhover.js"></script>
<!--[if IE]>
   <script src="js/html5.js"></script>
   <style type="text/css">
   a{blr:expression(this.onFocus=this.blur());}
   </style>
<![endif]-->
<!--[if IE 6]>
	<script src="js/png.js"></script>
   <script>
 	 DD_belatedPNG.fix('.png-bg');
   </script>
<![endif]-->
</head>
<body> 
	<div class="main"> 
		<div class="s-l fl">
			<div class="s-box"> 
				<div class="s-tl"> 
					<h2> 
						<i class="iconfont" data-uid="350">Ş</i>
						符合条件的钢厂
						<span >(由低到高)</span>
					</h2>
				</div>
				<div class="s-chart"> 
					<div id="chart-box"> 
					
					</div>
				</div>
				<div class="s-tl"> 
					<h2> 
						<i class="iconfont" data-uid="350">Ş</i>
						符合条件的公司
						<span >(由低到高)</span>
					</h2>
				</div>
				<div class="s-coms mt10 ui-pills-tmp549"> 
					<ul class="nav nav-pills m-tmp-link clear">
						  <li class="active"><a href="#">强劲 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">品企</a></li>
						  <li><a href="#">伟良</a></li>
						  <li><a href="#">风华 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">强劲 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">品企</a></li>
						  <li><a href="#">伟良</a></li>
						  <li><a href="#">风华 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">强劲 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">品企</a></li>
						  <li><a href="#">伟良</a></li>
						  <li><a href="#">风华 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">强劲 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">品企</a></li>
						  <li><a href="#">伟良</a></li>
						  <li><a href="#">风华 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">强劲 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">品企</a></li>
						  <li><a href="#">伟良</a></li>
						  <li><a href="#">风华 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">强劲 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">品企</a></li>
						  <li><a href="#">伟良</a></li>
						  <li><a href="#">风华 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">强劲 <i class="iconfont icon">Ū</i></a></li>
						  <li><a href="#">品企</a></li>
						  <li><a href="#">伟良</a></li>
						  <li><a href="#">风华 <i class="iconfont icon">Ū</i></a></li>
					</ul>
				</div>
				<div class="s-coms mt10"> 
					<form class="form-inline">
						<div class="input-append">
							<input type="text" class="input" placeholder="搜索资源">
							<button class="btn btn-primary">搜索</button>
							<i class="ico-s iconfont f16">ő</i>
						</div>
						<label class="checkbox">
							<input type="checkbox"> 只显示有价格的
						</label>
						<div class="span-v">
							<label class="fb">正在搜索：</label>
							<em>螺纹钢 HRB335 10*9 </em>
						</div>
						<a class="new iconfont" href="#">Ź</a>
					</form>
					<div id="alert-3" class="alert ui-poptip fade in" style="position:absolute;right:-16px;top:-27px;">
						<div class="ui-poptip-shadow">
							<div class="ui-poptip-container">
								 <div class="ui-poptip-arrow-left ui-poptip-arrow-bottom">
									 <span>◆</span>
									 <em>◆</em>
								 </div>
								 <div class="ui-poptip-txt"> 
									点击这里新建订单
								 </div>
							</div>
							<a class="close" data-target="#alert-3" data-dismiss="alert" href="javascript:;">×</a>
						</div>
					</div>
				</div>
				<div class="s-tl"> 
					<h2> 
						<i class="iconfont" data-uid="350">Ş</i>
						推荐资源
					</h2>
				</div>
				<div class="s-coms mt10"> 
					<a class="add-row add-new iconfont" href="javascript:;">Ź</a>
					<table id="edit-tb" class="ui-cus-table ui-table">
						<tbody>
							<tr> 
								<td width="100"><span>二级钢</span><input type="text" /></td>
								<td width="100"><span>10*9</span><input type="text" /></td>
								<td width="100"><span>RB335</span><input type="text" /></td>
								<td><span>黄海</span><input type="text" /></td>
								<td><span>松江</span><input type="text" /></td>
								<td><span>3600</span><input type="text" /></td>
								<td><span>准钢</span><input type="text" /></td>
								<td><span>任鸿亮</span><input type="text" /></td>
								<td width="150" class="last-td l-tmp-link">
									<a class="edit-row iconfont f14" href="javascript:;">Ŵ</a>
									<a class="save-row iconfont f14" href="javascript:;">Ŗ</a>
									<a class="del-row iconfont f14" href="javascript:;">Ť</a>
								</td>
							</tr>
						</tbody>
					</table>
					<table id="tb-tmp" style="display:none;">
						<tr class="hover"> 
							<td width="100"><span></span><input type="text" /></td>
							<td width="100"><span></span><input type="text" /></td>
							<td width="100"><span></span><input type="text" /></td>
							<td><span></span><input type="text" /></td>
							<td><span></span><input type="text" /></td>
							<td><span></span><input type="text" /></td>
							<td><span></span><input type="text" /></td>
							<td><span></span><input type="text" /></td>
							<td width="150" class="last-td l-tmp-link">
								<a class="edit-row iconfont f14" href="javascript:;">Ŵ</a>
								<a class="save-row iconfont f14" href="javascript:;">Ŗ</a>
								<a class="del-row iconfont f14" href="javascript:;">Ť</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="clear mt10"> 
					<div class="ui-tabs ui-tabs-cusnav2">
						<div class="navbar">
							<div class="navbar-inner">
								<ul class="nav">
									<li class="active"><a data-toggle="tab" href="#tab1">今日部门资源</a></li>
									<li class=""><a data-toggle="tab" href="#tab2">今日QQ群资源</a></li>
									<li class=""><a data-toggle="tab" href="#tab3">历史资源</a></li>
									<li ><a data-toggle="tab" href="#tab4">历史成交资源</a></li>
								</ul>
							</div>
						</div>
						<div class="tab-content">
							<div id="tab1" class="tab-pane fade active in">
								<table class="f14 ui-tbitem ui-table ui-table-bordered ui-table-hover"> 
									<thead> 
										<tr>
											<th style="width:50px;"><input type="checkbox"></th>
											<th style="width:150px;">品名</th>
											<th>规格</th>
											<th>材质</th>
											<th>钢厂</th>
											<th>仓库</th>
											<th style="width:120px;">
												<select class="search-op"> 
													<option value="">显示有价格</option>
												</select>
											</th>
											<th>备注</th>
											<th style="width:100px;">操作</th>
										</tr>
									</thead>
									<tbody> 
										<tr>
											<td><input type="checkbox"></td>
											<td>二级钢<em>312321</em></td>
											<td>10*9</td>
											<td>RB335</td>
											<td>黄海</td>
											<td>松江</td>
											<td class="hot">3600</td>
											<td>要求仓库在上海的</td>
											<td><a href="#">推荐</a></td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>二级钢</td>
											<td>10*9</td>
											<td>RB335</td>
											<td>黄海</td>
											<td>松江</td>
											<td class="hot">3600</td>
											<td>要求仓库在上海的</td>
											<td><span class="cl-lighter">已推荐</span> </td>
										</tr>
									</tbody>
								</table>
								<div class="ui-page mt5 mb5 fr clear">
									<span class="ui-page-item ui-page-item-info">共41条记录，共5页</span>
									<a class="ui-page-item ui-page-item-first" href="#">首页</a>
									<a class="ui-page-item ui-page-item-prev" href="#"><i>&lt;&lt;</i>上一页</a>
									<a class="ui-page-item ui-page-item-current" href="#">1</a>
									<a class="ui-page-item" href="#">2</a>
									<a class="ui-page-item" href="#">3</a>
									<span class="ui-page-item">...</span>
									<a class="ui-page-item" href="#">40</a>
									<a class="ui-page-item" href="#">41</a>
									<a class="ui-page-item ui-page-next" href="#">下一页<i>&gt;&gt;</i></a>
									<a class="ui-page-item ui-page-last" href="#">尾页</a>
								</div>
							</div>
							<div id="tab2" class="tab-pane fade">
								<table class="f14 ui-tbitem ui-table ui-table-bordered ui-table-hover"> 
									<thead> 
										<tr>
											<th style="width:50px;"><input type="checkbox"></th>
											<th style="width:150px;">品名</th>
											<th>规格</th>
											<th>材质</th>
											<th>钢厂</th>
											<th>仓库</th>
											<th>
												<select class="search-op"> 
													<option value="">显示有价格</option>
												</select>
											</th>
											<th>备注</th>
											<th style="width:100px;">操作</th>
										</tr>
									</thead>
									<tbody> 
										<tr>
											<td><input type="checkbox"></td>
											<td>二级钢<em>312321</em></td>
											<td>10*9</td>
											<td>RB335</td>
											<td>黄海</td>
											<td>松江</td>
											<td class="hot">3600</td>
											<td>要求仓库在上海的</td>
											<td><a href="#">推荐</a></td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>二级钢</td>
											<td>10*9</td>
											<td>RB335</td>
											<td>黄海</td>
											<td>松江</td>
											<td class="hot">3600</td>
											<td>要求仓库在上海的</td>
											<td><span class="cl-lighter">已推荐</span> </td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="tab3" class="tab-pane fade">
								<table class="f14 ui-tbitem ui-table ui-table-bordered ui-table-hover"> 
									<thead> 
										<tr>
											<th style="width:50px;"><input type="checkbox"></th>
											<th style="width:150px;">品名</th>
											<th>规格</th>
											<th>材质</th>
											<th>钢厂</th>
											<th>仓库</th>
											<th>
												<select class="search-op"> 
													<option value="">显示有价格</option>
												</select>
											</th>
											<th>备注</th>
											<th style="width:100px;">操作</th>
										</tr>
									</thead>
									<tbody> 
										<tr>
											<td><input type="checkbox"></td>
											<td>二级钢<em>312321</em></td>
											<td>10*9</td>
											<td>RB335</td>
											<td>黄海</td>
											<td>松江</td>
											<td class="hot">3600</td>
											<td>要求仓库在上海的</td>
											<td><a href="#">推荐</a></td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>二级钢</td>
											<td>10*9</td>
											<td>RB335</td>
											<td>黄海</td>
											<td>松江</td>
											<td class="hot">3600</td>
											<td>要求仓库在上海的</td>
											<td><span class="cl-lighter">已推荐</span> </td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="tab4" class="tab-pane fade">
								<table class="f14 ui-tbitem ui-table ui-table-bordered ui-table-hover"> 
									<thead> 
										<tr>
											<th style="width:50px;"><input type="checkbox"></th>
											<th style="width:150px;">品名</th>
											<th>规格</th>
											<th>材质</th>
											<th>钢厂</th>
											<th>仓库</th>
											<th>
												<select class="search-op"> 
													<option value="">显示有价格</option>
												</select>
											</th>
											<th>备注</th>
											<th style="width:100px;">操作</th>
										</tr>
									</thead>
									<tbody> 
										<tr>
											<td><input type="checkbox"></td>
											<td>二级钢<em>312321</em></td>
											<td>10*9</td>
											<td>RB335</td>
											<td>黄海</td>
											<td>松江</td>
											<td class="hot">3600</td>
											<td>要求仓库在上海的</td>
											<td><a href="#">推荐</a></td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>二级钢</td>
											<td>10*9</td>
											<td>RB335</td>
											<td>黄海</td>
											<td>松江</td>
											<td class="hot">3600</td>
											<td>要求仓库在上海的</td>
											<td><span class="cl-lighter">已推荐</span> </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="s-r fr">
			<div class="s-box">
				<div class="ui-tabs ui-pills">
					<div class="navbar">
						<div class="navbar-inner">
							<ul class="nav">
								<li class="active"><a data-toggle="tab" href="#tabp1">螺纹钢9M</a></li>
								<li class="divider-vertical"></li>
								<li><a data-toggle="tab" href="#tabp2">螺纹钢12M</a></li>
								<li class="divider-vertical"></li>
								<li><a data-toggle="tab" href="#tabp3">线材</a></li>
								<li class="divider-vertical"></li>
								<li><a data-toggle="tab" href="#tabp4">盘螺</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-content">
						<div id="tabp1" class="tab-pane fade active in">
							<ul class="u-tl clear">
								<li style="width:25%;"></li>
								<li style="width:23%;">HRB335</li>
								<li style="width:23%;">HRB400</li>
								<li style="width:23%;">HRB400E</li>
							</ul>
							<dl class="u-item clear">
								<dt style="width:25%;">10</dt>
								<dd class="c-item"><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd class="c-item"><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd class="c-item"><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
							<dl class="u-item clear">
								<dt style="width:25%;">14</dt>
								<dd class="c-item"><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd class="c-item"><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd class="c-item"><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
							<dl class="u-item clear">
								<dt style="width:25%;">16</dt>
								<dd class="c-item"><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd class="c-item"><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd class="c-item"><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
						</div>
						<div id="tabp2" class="tab-pane fade">
							<ul class="u-tl clear">
								<li style="width:25%;"></li>
								<li style="width:25%;">HRB335</li>
								<li style="width:25%;">HRB400</li>
								<li style="width:25%;">HRB400E</li>
							</ul>
							<dl class="u-item clear">
								<dt style="width:25%;">10</dt>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
							<dl class="u-item clear">
								<dt style="width:25%;">14</dt>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
							<dl class="u-item clear">
								<dt style="width:25%;">16</dt>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
						</div>
						<div id="tabp3" class="tab-pane fade">
							<ul class="u-tl clear">
								<li style="width:25%;"></li>
								<li style="width:25%;">HRB335</li>
								<li style="width:25%;">HRB400</li>
								<li style="width:25%;">HRB400E</li>
							</ul>
							<dl class="u-item clear">
								<dt style="width:25%;">10</dt>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
							<dl class="u-item clear">
								<dt style="width:25%;">14</dt>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
							<dl class="u-item clear">
								<dt style="width:25%;">16</dt>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
						</div>
						<div id="tabp4" class="tab-pane fade">
							<ul class="u-tl clear">
								<li style="width:25%;"></li>
								<li style="width:25%;">HRB335</li>
								<li style="width:25%;">HRB400</li>
								<li style="width:25%;">HRB400E</li>
							</ul>
							<dl class="u-item clear">
								<dt style="width:25%;">10</dt>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
							<dl class="u-item clear">
								<dt style="width:25%;">14</dt>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
							<dl class="u-item clear">
								<dt style="width:25%;">16</dt>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
								<dd><span>黄海 3600</span><span>沙钢 3200</span></dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	$(function () {
		var chart,
		colors = Highcharts.getOptions().colors,
		categories = ['<a href="#">望天</a>', '<a href="#">宏泰</a>', '<a href="#">瑞星</a>', '<a href="#">哲钢</a>', '<a href="#">天启</a>','<a href="#">龙华</a>','<a href="#">鞍钢</a>','<a href="#">马钢</a>','<a href="#">天钢</a>','<a href="#">万钢</a>','<a href="#">水钢</a>','<a href="#">猛钢</a>','<a href="#">日钢</a>','<a href="#">风钢</a>'],
		name = '',
		data = [{
				y: 3380,
				color: colors[0],
				drilldown: {
					color: colors[0]
				}
			}, {
				y: 3320,
				color: colors[1],
				drilldown: {
					color: colors[1]
				}
			}, {
				y: 2540,
				color: colors[2],
				drilldown: {
					color: colors[2]
				}
			}, {
				y: 2320,
				color: colors[3],
				drilldown: {
					color: colors[3]
				}
			}, {
				y: 2500,
				color: colors[4],
				drilldown: {
					color: colors[4]
				}
			}, {
				y: 2500,
				color: colors[5],
				drilldown: {
					color: colors[5]
				}
			}, {
				y: 2500,
				color: colors[6],
				drilldown: {
					color: colors[6]
				}
			}, {
				y: 3400,
				color: colors[1],
				drilldown: {
					color: colors[1]
				}
			}, {
				y: 3300,
				color: colors[2],
				drilldown: {
					color: colors[2]
				}
			}, {
				y: 3200,
				color: colors[3],
				drilldown: {
					color: colors[3]
				}
			}, {
				y: 3500,
				color: colors[4],
				drilldown: {
					color: colors[5]
				}
			}, {
				y: 1500,
				color: colors[6],
				drilldown: {
					color: colors[6]
				}
			}, {
				y: 4500,
				color: colors[1],
				drilldown: {
					color: colors[1]
				}
			}];

	function setChart(name, categories, data, color) {
		chart.xAxis[0].setCategories(categories, false);
		chart.series[0].remove(false);
		chart.addSeries({
			name: name,
			data: data,
			color: color || '#0B72A4'
		}, false);
		chart.redraw();
	}
		$(document).ready(function() {
			chart = new Highcharts.Chart({
				chart: {
					renderTo: 'chart-box',
					type: 'column',
					height:300
				},
				title: {
					text: ''
				},
				subtitle: {
					text: ''
				},
				xAxis: {
					categories: categories
				},
				yAxis: {
					title: {
						text: ''
					}
				},
				plotOptions: {
					column: {
						cursor: 'pointer',
						dataLabels: {
							enabled: true,
							color: colors[0],
							style: {
								fontWeight: 'bold',
								fontFamily: '微软雅黑'
							},
							formatter: function() {
								return this.y;
							}
						}
					}
				},
				tooltip: {
					formatter: function() {
						var point = this.point,
							s = this.x +':<b>'+ this.y +'吨</b><br/>';
						return s;
					}
				},
				series: [{
					name: name,
					data: data,
					color: 'white'
				}],
				exporting: {
					enabled: false
				},
				credits:[{
					enabled:true
				}],
				legend:[{
					enabled:true
				}]
			});
		});
		//编辑元素
		$(".edit-row").live('click',function(){
			var par_tr=$(this).closest("tr");
			if(!par_tr.hasClass('hover')){
				par_tr.find("input").each(function(){
					$(this).val($(this).siblings('span').html());
				});
				par_tr.addClass('hover');
			}else{
				par_tr.find("span").each(function(){
					$(this).html($(this).siblings('input').val());
				});
				par_tr.removeClass('hover');
			}
		});
		//删除元素
		$(".del-row").live('click',function(){
			var par_tr=$(this).closest("tr");
			par_tr.remove();
		});
		//新增一行
		$(".add-row").click(function(){
			$('#tb-tmp tr').clone().appendTo('#edit-tb tbody');
		});
		//变换图表
		$(".c-item").click(function(){
			//去除所有其他类样式
			$(".c-item").each(function(){
				if($(this).hasClass('active')){
					$(this).removeClass('active');
				}
			});
			$(this).addClass('active');
			var cats=['<a href="#">型天</a>', '<a href="#">宏泰</a>', '<a href="#">瑞星</a>', '<a href="#">哲钢</a>', '<a href="#">天启</a>','<a href="#">龙华</a>','<a href="#">鞍钢</a>','<a href="#">马钢</a>','<a href="#">天钢</a>','<a href="#">万钢</a>','<a href="#">水钢</a>','<a href="#">猛钢</a>','<a href="#">日钢</a>','<a href="#">风钢</a>'];
			var dats = [{
						y: Math.floor(Math.random()*10000+1),
						color: colors[0],
						drilldown: {
							color: colors[0]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[1],
						drilldown: {
							color: colors[1]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[2],
						drilldown: {
							color: colors[2]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[3],
						drilldown: {
							color: colors[3]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[4],
						drilldown: {
							color: colors[4]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[5],
						drilldown: {
							color: colors[5]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[6],
						drilldown: {
							color: colors[6]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[1],
						drilldown: {
							color: colors[1]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[2],
						drilldown: {
							color: colors[2]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[3],
						drilldown: {
							color: colors[3]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[4],
						drilldown: {
							color: colors[5]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[6],
						drilldown: {
							color: colors[6]
						}
					}, {
						y: Math.floor(Math.random()*10000+1),
						color: colors[1],
						drilldown: {
							color: colors[1]
						}
					}];
			//重载图表数据
			setChart(name, cats, dats);
		});
	});
</script>
<script type="text/javascript" src="js/highcharts.js"></script>
<script type="text/javascript" src="js/exporting.js"></script>
</body>
</html>