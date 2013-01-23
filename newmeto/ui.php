
<?php 
include "lessc.inc.php";
$less = new lessc('less/code.less');
file_put_contents('css/code.css', $less->parse());
$less = new lessc('less/base.less');
file_put_contents('css/base.css', $less->parse());
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>meto UI</title>
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/code.css" />
<link rel="stylesheet" href="css/base.css" />
<script type="text/javascript" src="js/in.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<!-- 此处可在主目录放置favicon.ico 与 apple-touch-icon.png  -->
<!--[if IE]>
   <script src="js/html5.js"></script>
<![endif]-->
<!--[if IE 6]>
	<script src="js/png.js"></script>
   <script>
 	 DD_belatedPNG.fix('.png-bg');
   </script>
<![endif]-->
</head>
<body> 
	<div class="meto-ui"> 
		<div class="hd"> 
			<div class="title-bar f14"> 
				<h2>普通UI</h2>
			</div>
			<div class="s-nav mt5">
				<ul class="clear">
					<li> 
						<a data-src="#s-tb1" href="javascript:;">
							<span class="iconfont">Ğ</span>
							<em>一般列表</em>
						</a>
					</li>
					<li> 
						<a data-src="#s-tb2" href="javascript:;">
							<span class="iconfont">ġ</span>
							<em>元素翻转</em>
						</a>
					</li>
					<li> 
						<a data-src="#s-tb3" href="javascript:;">
							<span class="iconfont">Ĝ</span>
							<em>链接规范</em>
						</a>
					</li>
					<li> 
						<a data-src="#s-tb4" href="javascript:;">
							<span class="iconfont">Ĝ</span>
							<em>新闻模块</em>
						</a>
					</li>
					<li> 
						<a data-src="#s-tb5" href="javascript:;">
							<span class="iconfont">Ĝ</span>
							<em>表格模块</em>
						</a>
					</li>
					<li> 
						<a data-src="#s-tb6" href="javascript:;">
							<span class="iconfont">Ĝ</span>
							<em>按钮模块</em>
						</a>
					</li>
					<li> 
						<a data-src="#s-tb7" href="javascript:;">
							<span class="iconfont">Ĝ</span>
							<em>面包导航</em>
						</a>
					</li>
					<li> 
						<a data-src="#s-tb8" href="javascript:;">
							<span class="iconfont">Ĝ</span>
							<em>基础列表</em>
						</a>
					</li>
					<li> 
						<a data-src="#s-tb9" href="javascript:;">
							<span class="iconfont">Ĝ</span>
							<em>边栏导航</em>
						</a>
					</li>
					<li> 
						<a data-src="#s-tb10" href="javascript:;">
							<span class="iconfont">Ĝ</span>
							<em>首部导航</em>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="s-tb1" class="sTab" style="display:none;">
		<div class="iCode"> 
			<ul class="ui-list ui-list-lines clear">
				<li class="ui-list-item"><a href="#">新闻1</a></li>
				<li class="ui-list-item"><a href="#">新闻2</a></li>
				<li class="ui-list-item"><a href="#">新闻3</a></li>
			</ul>
			<ul class="ui-list clear">
				<li class="ui-list-item"><a href="#">新闻1</a></li>
				<li class="ui-list-item"><a href="#">新闻2</a></li>
				<li class="ui-list-item"><a href="#">新闻3</a></li>
			</ul>
		</div>
	</div>
	<style> 
		.ui-list-item .iconfont{font-size:24px;}
	</style>
	<div id="s-tb2" class="sTab" style="display:none;">
		<div class="iCode"> 
			<ul class="ui-list ui-list-lines m-link clear">
				<li class="ui-list-item ui-deg45"><i class="ui-deg-icon iconfont">ŵ</i></li>
				<li class="ui-list-item ui-deg90"><i class="ui-deg-icon iconfont">ŵ</i></li>
				<li class="ui-list-item ui-deg180"><i class="ui-deg-icon iconfont">ŵ</i></li>
				<li class="ui-list-item ui-deg360"><i class="ui-deg-icon iconfont">ŵ</i></li>
			</ul>
		</div>
	</div>
	<div id="s-tb3" class="sTab" style="display:none;">
		<div class="iCode"> 
			<ul class="ui-list ui-list-lines m-link clear">
				<li class="ui-list-item"><a href="#">新闻1</a></li>
				<li class="ui-list-item"><a href="#">新闻2</a></li>
				<li class="ui-list-item"><a href="#">新闻3</a></li>
			</ul>
			<ul class="ui-list ui-list-lines m-linkA clear">
				<li class="ui-list-item"><a href="#">新闻1</a></li>
				<li class="ui-list-item"><a href="#">新闻2</a></li>
				<li class="ui-list-item"><a href="#">新闻3</a></li>
			</ul>
			<ul class="ui-list ui-list-lines m-linkB clear">
				<li class="ui-list-item"><a href="#">新闻1</a></li>
				<li class="ui-list-item"><a href="#">新闻2</a></li>
				<li class="ui-list-item"><a href="#">新闻3</a></li>
			</ul>
		</div>
	</div>
	<div id="s-tb4" class="sTab" style="display:none;">
		<div class="iCode"> 
			<div class="ui-article" style="width:600px;"> 
				<div class="hd"> 
					<h1>朱镕基曾想把铁路网拆分改革 因任期将满被搁置</h1>
					<div class="ui-titBar clear"> 
						<span class="ui-titTag m-linkA"><a href="#">时政新闻</a></span>
						<span class="ui-titFrom m-linkB"><a href="#">人民网-中国经济周刊</a></span>
						<span class="ui-titTime">2013-01-22 09:27</span>
						<span class="ui-titMore fr"> 
							<a href="#" class="ui-comment"><i class="iconfont">Ŧ</i><em>1304</em></a>
						</span>
					</div>
				</div>
				<div class="bd"> 
					<div class="ui-contentTl mb5"> 
						<strong>导读</strong>
						国家能源局原局长张国宝回忆称，朱镕基退休前曾把铁路体制改革提上日程，但遭铁路部门强烈反对；当时政府任期将满，朱镕基总理称做不完的事留给下一届去做，就把铁路改革搁置了。
					</div>
					<div class="ui-contentBd mt5"> 
						<p>原标题：张国宝回忆：铁路体制为什么没改？</p>
						<p>对于历经争论、几易其稿的中国电力体制改革而言，最后形成“共识”——业界统称的“电改5号文件”，是一个漫长而艰难的过程。</p>
						<p>电改5号文件的改革核心，也是改革难点包括：厂网分开、国家电力“一拆为五”、全国“一张网”还是“多张网”、成立专门监管机构电监会等。</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="s-tb5" class="sTab" style="display:none;">
		<div class="iCode" style="width:600px;"> 
			<h3 id="list-14">表格</h3>	
			<table class="ui-table">
				<thead>
					<tr>
						<th>表头表头表头表头表头表头</th>
						<th>表头表头表头</th>
						<th>表头</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>内容</td>
						<td>内容</td>
						<td>内容内容内容</td>
					</tr>
					<tr>
						<td>内容</td>
						<td>内容</td>
						<td>内容内容内容</td>
					</tr>
				</tbody>
			</table> <!-- .ui-table -->
			<table class="ui-table ui-table-striped">
				<thead>
					<tr>
						<th>表头表头表头表头表头表头</th>
						<th>表头表头表头</th>
						<th>表头</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>内容</td>
						<td>内容</td>
						<td>内容内容内容</td>
					</tr>
					<tr>
						<td>内容</td>
						<td>内容</td>
						<td>内容内容内容</td>
					</tr>
				</tbody>
			</table> <!-- .ui-table -->
			<table class="ui-table ui-table-bordered ui-table-hover">
				<thead>
					<tr>
						<th>表头表头表头表头表头表头</th>
						<th>表头表头表头</th>
						<th>表头</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>内容</td>
						<td>内容</td>
						<td>内容内容内容</td>
					</tr>
					<tr>
						<td>内容</td>
						<td>内容</td>
						<td>内容内容内容</td>
					</tr>
				</tbody>
			</table> <!-- .ui-table -->
			<table class="ui-table ui-table-hover">
				<thead>
					<tr>
						<th>表头表头表头表头表头表头</th>
						<th>表头表头表头</th>
						<th>表头</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>内容</td>
						<td>内容</td>
						<td>内容内容内容</td>
					</tr>
					<tr>
						<td>内容</td>
						<td>内容</td>
						<td>内容内容内容</td>
					</tr>
				</tbody>
			</table> <!-- .ui-table -->
			<table class="ui-table ui-table-condensed">
				<thead>
					<tr>
						<th class="span1">表头表头表头表头表头表头</th>
						<th class="span2">表头表头表头</th>
						<th class="span3">表头</th>
					</tr>
				</thead>
				<tbody>
					<tr class="success">
						<td>内容</td>
						<td>内容</td>
						<td>内容内容内容</td>
					</tr>
					<tr class="error">
						<td>内容</td>
						<td>内容</td>
						<td>内容内容内容</td>
					</tr>
					<tr class="info">
						<td>内容</td>
						<td>内容</td>
						<td>内容内容内容</td>
					</tr>
				</tbody>
			</table> <!-- .ui-table -->
		</div>
	</div>
	<div id="s-tb6" class="sTab" style="display:none;">
		<div class="iCode" style="width:600px;"> 
			<div class="code"> 
				<h3 id="list-16">按钮</h3>
				<table class="ui-table ui-table-bordered">
					<thead>
					  <tr>
						<th>按钮</th>
						<th>class=""</th>
						<th>描述</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>
							<button type="button" class="btn btn-large">默认</button><span class="label">默认</span>
							<button type="button" class="btn">默认</button>
							<button type="button" class="btn btn-small">默认</button>
							<button type="button" class="btn btn-mini">默认</button>
							<button type="button" disabled="disabled" class="btn btn-mini disabled">默认</button>
						</td>
						<td><code>btn</code></td>
						<td>默认白色</td>
					  </tr>
					  <tr>
						<td><button type="button" class="btn btn-primary">蓝色</button></td>
						<td><code>btn btn-primary</code></td>
						<td>默认蓝色</td>
					  </tr>
					  <tr>
						<td><button type="button" class="btn btn-info">浅色</button></td>
						<td><code>btn btn-info</code></td>
						<td>默认浅色</td>
					  </tr>
					  <tr>
						<td><button type="button" class="btn btn-success">绿色</button></td>
						<td><code>btn btn-success</code></td>
						<td>默认绿色</td>
					  </tr>
					  <tr>
						<td><button type="button" class="btn btn-warning">黄色</button></td>
						<td><code>btn btn-warning</code></td>
						<td>默认黄色</td>
					  </tr>
					  <tr>
						<td><button type="button" class="btn btn-danger">红色</button></td>
						<td><code>btn btn-danger</code></td>
						<td>默认红色</td>
					  </tr>
					  <tr>
						<td><button type="button" class="btn btn-inverse">黑色</button></td>
						<td><code>btn btn-inverse</code></td>
						<td>默认黑色</td>
					  </tr>
					  <tr>
						<td><button type="button" class="btn btn-link">Link</button></td>
						<td><code>btn btn-link</code></td>
						<td>默认link样式</td>
					  </tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div id="s-tb7" class="sTab" style="display:none;">
		<div class="iCode"> 
			<h2>使用m-link扩展</h2>
			<ul class="ui-crumbs m-link">
                <li class="item first">
                    <a href="#1234">首页</a>
                </li>
                <li class="item split">
                    <i class="iconfont">ƒ</i>
                </li>
                <li class="item">
                     <a href="#44">子页一</a>
                </li>
                <li class="item split">
                    <i class="iconfont">ƒ</i>
                </li>
                <li class="item last">
                    子页二
                </li>
            </ul>
			<ul class="ui-crumbs m-linkA">
                <li class="item first">
                    <a href="#1234">首页</a>
                </li>
                <li class="item split">
                    <i class="iconfont">ƒ</i>
                </li>
                <li class="item">
                     <a href="#44">子页一</a>
                </li>
                <li class="item split">
                    <i class="iconfont">ƒ</i>
                </li>
                <li class="item last">
                    子页二
                </li>
            </ul>
			<ul class="ui-crumbs m-linkB">
                <li class="item first">
                    <a href="#1234">首页</a>
                </li>
                <li class="item split">
                    <i class="iconfont">ƒ</i>
                </li>
                <li class="item">
                     <a href="#44">子页一</a>
                </li>
                <li class="item split">
                    <i class="iconfont">ƒ</i>
                </li>
                <li class="item last">
                    子页二
                </li>
            </ul>
		</div>
	</div>
	<div id="s-tb8" class="sTab" style="display:none;">
		<div class="iCode"> 
			<div class="ui-newsList"> 
				<div class="hd"> 
					<h2>新闻动态</h2>
					<div class="more m-link"> 
						<a href="#">更多</a>
					</div>
				</div>
				<div class="bd m-link"> 
					<ul>
						<li>•<a href="#">中共中央总书记、中共中央军委主席习近平考察腾讯</a></li>
						<li>•<a href="#">腾讯公布2012年第三季度业绩</a></li>
						<li>•<a href="#">国务院新闻办公室主任王晨考察腾讯</a></li>
						<li>•<a href="#">腾讯无线互联网研发总部奠基 打造华中门户枢纽</a></li>
						<li>•<a href="#">腾讯公布2012年第二季度及中期业绩【PDF file】</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="s-tb9" class="sTab" style="display:none;"> 
		<div class="iCode"> 
			<div class="ui-asideMenu">
				<div class="ui-aside"> 
					<ul> 
						<li class="item-Menu m-linkB" data-type="mhover"> 
							<div class="item-hd">
								<h3> 
									<i class="iconfont">k</i>
									服装/内衣/配件
								</h3>
							</div>
							<div class="item-hd"> 
								<p>
									<a href="#">女装</a>
									<a href="#">男装</a>
									<a href="#">内衣</a>
									<a href="#">羽绒服</a>
									<a href="#">大衣</a>
									<a href="#">毛衣</a>
								</p>
								<p>
									<a href="#">女装</a>
									<a href="#">男装</a>
									<a href="#">内衣</a>
									<a href="#">羽绒服</a>
									<a href="#">大衣</a>
									<a href="#">毛衣</a>
								</p>
							</div>
							<div class="ui-category"> 
								<div id="sub-view-1" class="sub-view sub-view1 m-linkA"> 
									<ul class="view-list">
										<li>
											<dl class="view-items">
												<dt>品牌馆</dt>
												<dd><a href="#">内衣</a></dd>
												<dd><a href="#">中衣</a></dd>
												<dd><a href="#">大衣</a></dd>
											</dl>
										</li>							
									</ul>
								</div>
							</div>
						</li>
						<li class="item-Menu m-linkB item-Menu2" data-type="mhover"> 
							<div class="item-hd">
								<h3> 
									<i class="iconfont">k</i>
									女包/大包/小包
								</h3>
							</div>
							<div class="item-hd"> 
								<p>
									<a href="#">女装</a>
									<a href="#">男装</a>
									<a href="#">内衣</a>
									<a href="#">羽绒服</a>
									<a href="#">大衣</a>
									<a href="#">毛衣</a>
								</p>
								<p>
									<a href="#">女装</a>
									<a href="#">男装</a>
									<a href="#">内衣</a>
									<a href="#">羽绒服</a>
									<a href="#">大衣</a>
									<a href="#">毛衣</a>
								</p>
							</div>
							<div class="ui-category"> 
							<div class="sub-view m-linkA"> 
									<ul class="view-list">
										<li>
											<dl class="view-items">
												<dt>品牌馆</dt>
												<dd><a href="#">内衣</a></dd>
												<dd><a href="#">中衣</a></dd>
												<dd><a href="#">大衣</a></dd>
											</dl>
										</li>							
									</ul>
								</div>
							</div>
						</li>
						<li class="item-Menu m-linkB" data-type="mhover"> 
							<div class="item-hd">
								<h3> 
									<i class="iconfont">k</i>
									女包/大包/小包
								</h3>
							</div>
							<div class="item-hd"> 
								<p>
									<a href="#">女装</a>
									<a href="#">男装</a>
									<a href="#">内衣</a>
									<a href="#">羽绒服</a>
									<a href="#">大衣</a>
									<a href="#">毛衣</a>
								</p>
								<p>
									<a href="#">女装</a>
									<a href="#">男装</a>
									<a href="#">内衣</a>
									<a href="#">羽绒服</a>
									<a href="#">大衣</a>
									<a href="#">毛衣</a>
								</p>
							</div>
							<div class="ui-category"> 
							<div class="sub-view m-linkA"> 
									<ul class="view-list">
										<li>
											<dl class="view-items">
												<dt>品牌馆</dt>
												<dd><a href="#">内衣</a></dd>
												<dd><a href="#">中衣</a></dd>
												<dd><a href="#">大衣</a></dd>
											</dl>
										</li>							
									</ul>
								</div>
							</div>
						</li>
					</ul>
					<div class="sideBar"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="s-tb10" class="sTab" style="display:none;"> 
		
	</div>
	<script> 
		In.add('ed',{path:'js/plugin/ed.js',type:'js',charset:'utf-8'});//交互js类
		In.add('bootstrap',{path:'js/plugin/bootstrap.js',type:'js',charset:'utf-8'});//交互js类
		In.add('mhover',{path:'js/plugin/mhover.js',type:'js',charset:'utf-8'});//左边栏变换
		In.ready('bootstrap','ed','mhover',function(){
			//mhover自定义
			$('.item-Menu').mhover({
				ajaxShow : true
			});
			//全局active
			$('.s-nav li').on('click',function(){
				$(this).addClass('active').siblings().removeClass('active');
			});
			//全局绑定弹窗事件
			$('.s-nav a').on('click',function(){
				easyDialog.open({
				  container : {
					header : $(this).find('em').html(),
					content : $($(this).attr("data-src")).html()
				  },
				  overlay : true
				});
			});
		});
	</script>
</body>
</html>