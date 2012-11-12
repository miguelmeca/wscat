<?php 
include "lessc.inc.php";
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
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>找钢网首页</title>
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<link rel="stylesheet" href="css/base.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/code.js"></script>
<script type="text/javascript" src="js/bootstrap-transition.js"></script>
<script type="text/javascript" src="js/bootstrap-alert.js"></script>
<script type="text/javascript" src="js/bootstrap-tab.js"></script>
<script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
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
<style type="text/css">
	html{background:#f7f7f7;}
	body{width:850px;padding:10px;}

	.preview{width:800px;padding:20px 25px;margin-bottom:10px;font:12px/1.5 Courier, "Courier New", Arial, sans-serif;border:1px dotted #aaa;background:#fff;white-space:pre-wrap;ord-wrap:break-word;word-break:break-all;*zoom:1;}
	.preview h3{font:500 16px 'Microsoft Yahei';margin:0;color:#c30;}
	
	#g{width:250px;padding:15px 25px;background:#eee;border:1px solid #bbb;position:fixed;right:10px;top:18px;}
	#shortcut li{color:#888;margin-left:2em;font:italic 14px/1.6 Courier, 'Courier New';}
	#shortcut a{color:#464646;font-style:normal;text-decoration:none;text-shadow:1px 1px 2px #fff;}
	#shortcut a:hover{text-decoration:underline;}
	.code{font-size:12px;border:1px solid #eee;border-left-width:5px;font-family:"微软雅黑";margin:15px 0;padding:10px;background:#fbfbfb;}
	pre{font-size:13px;border:1px solid #eee;border-left-width:5px;font-family:Courier,'Courier New';margin:15px 0;padding:10px;background:#fbfbfb;}
	.the-icons li{float: left;line-height: 24px; width: 160px;position: relative;}
</style>
</head>
<body id="list-0">
<div id="g">
    <ol id="shortcut">

    </ol>   
    <div id="copied"></div>
</div>

<div class="code"> 
	<h3>一般列表横向</h3>
	<ul class="ui-list ui-list-lines m-link clear">
		<li class="ui-list-item"><a href="1.html">新闻第一条</a></li>
		<li class="ui-list-item"><a href="2.html">新闻第一条b</a></li>
		<li class="ui-list-item"><a href="3.html">新闻第一条c</a></li>
	</ul>
	<h3>一般列表纵向</h3>
	<ul class="ui-list m-tmp-link clear">
		<li class="ui-list-item"><a href="1.html">新闻第一条</a></li>
		<li class="ui-list-item"><a href="2.html">新闻第一条b</a></li>
		<li class="ui-list-item"><a href="3.html">新闻第一条c</a></li>
	</ul>
</div>
<pre class="brush: xml">
<h3 id="link-0">一般列表(.ui-list)</h3>
&lt;ul class="ui-list clear"&gt;
    &lt;li class="ui-list-item"&gt;&lt;a href="#"&gt;新闻第一条&lt;/a&gt;&lt;/li&gt;
    &lt;li class="ui-list-item"&gt;&lt;a href="#"&gt;新闻第一条b&lt;/a&gt;&lt;/li&gt;
    &lt;li class="ui-list-item"&gt;&lt;a href="#"&gt;新闻第一条c&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>


<div class="code"> 
	<h3>导航</h3>
	<ul class="ui-nav clear">
		<li class="ui-nav-item" data-type="mhover">
			<a href="#">导航</a>
			<ul class="ui-nav-item-child">
				<li>item</li>
				<li>item</li>
				<li>item</li>
			</ul>
		</li>
		<li class="ui-nav-item ui-nav-item-current" data-type="mhover">
			<a href="#">导航</a>
			<ul class="ui-nav-item-child">
				<li>item</li>
				<li>item</li>
				<li>item</li>
			</ul>
		</li>
		<li class="ui-nav-item" data-type="mhover">
			<a href="#">导航</a>
			<ul class="ui-nav-item-child">
				<li>item</li>
				<li>item</li>
				<li>item</li>
			</ul>
		</li>
		<li class="ui-nav-item" data-type="mhover">
			<a href="#">导航</a>
			<ul class="ui-nav-item-child">
				<li>item</li>
				<li>item</li>
				<li>item</li>
			</ul>
		</li>
	</ul>
</div>
<pre class="brush: xml">
<h3>导航(.ui-nav)</h3>
&lt;ul class="ui-nav clear"&gt;
    &lt;li class="ui-nav-item"&gt;
        &lt;a href="#"&gt;导航&lt;/a&gt;
        &lt;ul class="ui-nav-item-child"&gt;
        	&lt;li&gt;item&lt;/li&gt;
        	&lt;li&gt;item&lt;/li&gt;
        	&lt;li&gt;item&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li class="ui-nav-item ui-nav-item-current"&gt;
        &lt;a href="#"&gt;导航&lt;/a&gt;
        &lt;ul class="ui-nav-item-child"&gt;
        	&lt;li&gt;item&lt;/li&gt;
        	&lt;li&gt;item&lt;/li&gt;
        	&lt;li&gt;item&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li class="ui-nav-item"&gt;
        &lt;a href="#"&gt;导航&lt;/a&gt;
        &lt;ul class="ui-nav-item-child"&gt;
        	&lt;li&gt;item&lt;/li&gt;
        	&lt;li&gt;item&lt;/li&gt;
        	&lt;li&gt;item&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li class="ui-nav-item"&gt;
        &lt;a href="#"&gt;导航&lt;/a&gt;
        &lt;ul class="ui-nav-item-child"&gt;
        	&lt;li&gt;item&lt;/li&gt;
        	&lt;li&gt;item&lt;/li&gt;
        	&lt;li&gt;item&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;
</pre>


<div class="code"> 
	<h3>标题</h3>
	<div class="ui-title">
		<h2 class="ui-title-cnt f16">标题</h2>
		<div class="ui-title-subcnt f14">
			(标题副本)
		</div>
	</div> <!-- .ui-title -->

	<!-- 如果标题没有其他内容，直接这样写 -->
	<h2 class="ui-title">标题</h2>
</div>
<pre class="brush: xml">
<h3>标题(.ui-title)</h3>
&lt;div class="ui-title fn-clear"&gt;
    &lt;h2 class="ui-title-cnt fn-left"&gt;标题&lt;/h2&gt;
    &lt;div class="ui-title-subcnt fn-left"&gt;
        &lt;!-- 标题中的其他内容 --&gt;
    &lt;/div&gt;
&lt;/div&gt; &lt;!-- .ui-title --&gt;

&lt;!-- 如果标题没有其他内容，直接这样写 --&gt;
&lt;h2 class="ui-title"&gt;标题&lt;/h2&gt;
</pre>

<div class="code"> 
<h3>步骤</h3>	
	<ol class="ui-step">
		<li class="ui-step-item ui-step-item-first">
			第一步
		</li>
		<li class="ui-step-item ui-step-item-current">
			第二步
		</li>
		<li class="ui-step-item">
		   当前
		</li>
		<li class="ui-step-item-last">
			最后一步
		</li>
	</ol> <!-- .ui-step -->
</div>
<pre class="brush: xml">
<h3>步骤(.ui-step)</h3>
&lt;ol class="ui-step"&gt;
    &lt;li class="ui-step-item ui-step-item-first"&gt;
        第一步
    &lt;/li&gt;
    &lt;li class="ui-step-item ui-step-item-current"&gt;
        第二步
    &lt;/li&gt;
    &lt;li class="ui-step-item"&gt;
       当前
    &lt;/li&gt;
    &lt;li class="ui-step-item-last"&gt;
        最后一步
    &lt;/li&gt;
&lt;/ol&gt; &lt;!-- .ui-step --&gt;
</pre>

<div class="code"> 
<h3>重复元素</h3>
	<ul class="ui-repeater">
		<li class="ui-repeater-item ui-repeater-item-current">内容</li>
		<li class="ui-repeater-item">内容</li>
		<li class="ui-repeater-item">内容</li>
		<li class="ui-repeater-item">内容</li>
		<li class="ui-repeater-item">内容</li>
		<li class="ui-repeater-item">内容</li>
		<li class="ui-repeater-item">内容</li>
	</ul> <!-- .ui-repeater -->
</div>
<pre class="brush: xml">
<h3>重复元素(.ui-repeater)</h3>
&lt;ul class="ui-repeater"&gt;
    &lt;li class="ui-repeater-item ui-repeater-item-current"&gt;内容&lt;/li&gt;
    &lt;li class="ui-repeater-item"&gt;内容&lt;/li&gt;
    &lt;li class="ui-repeater-item"&gt;内容&lt;/li&gt;
    &lt;li class="ui-repeater-item"&gt;内容&lt;/li&gt;
    &lt;li class="ui-repeater-item"&gt;内容&lt;/li&gt;
    &lt;li class="ui-repeater-item"&gt;内容&lt;/li&gt;
    &lt;li class="ui-repeater-item"&gt;内容&lt;/li&gt;
&lt;/ul&gt; &lt;!-- .ui-repeater --&gt;
</pre>

<div class="code">
<h3>分页</h3> 
	<div class="ui-page clear">
		<span class="ui-page-item ui-page-item-info">共41条记录，共5页</span>
		<a href="#" class="ui-page-item ui-page-item-first">首页</a>
		<a href="#" class="ui-page-item ui-page-item-prev"><i>&lt;&lt;</i>上一页</a>
		<a href="#" class="ui-page-item ui-page-item-current">1</a>
		<a href="#" class="ui-page-item">2</a>
		<a href="#" class="ui-page-item">3</a>
		<span class="ui-page-item">...</span>
		<a href="#" class="ui-page-item">40</a>
		<a href="#" class="ui-page-item">41</a>
		<a href="#" class="ui-page-item ui-page-next">下一页<i>&gt;&gt;</i></a>
		<a href="#" class="ui-page-item ui-page-last">尾页</a>
	</div> <!-- .ui-page -->
</div>
<pre class="brush: xml">
<h3>分页(.ui-page)</h3>
&lt;div class="ui-page"&gt;
    &lt;span class="ui-page-item ui-page-item-info"&gt;共41条记录，共5页&lt;/span&gt;
    &lt;a href="#" class="ui-page-item ui-page-item-first"&gt;首页&lt;/a&gt;
    &lt;a href="#" class="ui-page-item ui-page-item-prev"&gt;上一页&lt;/a&gt;
    &lt;a href="#" class="ui-page-item ui-page-item-current"&gt;1&lt;/a&gt;
    &lt;a href="#" class="ui-page-item"&gt;2&lt;/a&gt;
    &lt;a href="#" class="ui-page-item"&gt;3&lt;/a&gt;
    &lt;span class="ui-page-item"&gt;...&lt;/span&gt;
    &lt;a href="#" class="ui-page-item"&gt;40&lt;/a&gt;
    &lt;a href="#" class="ui-page-item"&gt;41&lt;/a&gt;
    &lt;a href="#" class="ui-page-item ui-page-next"&gt;下一页&lt;/a&gt;
    &lt;a href="#" class="ui-page-item ui-page-last"&gt;尾页&lt;/a&gt;
&lt;/div&gt; &lt;!-- .ui-page --&gt;
</pre>

<div class="code"> 
<h3>表格</h3>	
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
<pre class="brush: xml">
<h3>表格(.ui-table)</h3>
&lt;table class="ui-table"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;表头表头表头表头表头表头&lt;/th&gt;
            &lt;th&gt;表头表头表头&lt;/th&gt;
            &lt;th&gt;表头&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;内容&lt;/td&gt;
            &lt;td&gt;内容&lt;/td&gt;
            &lt;td&gt;内容内容内容&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;内容&lt;/td&gt;
            &lt;td&gt;内容&lt;/td&gt;
            &lt;td&gt;内容内容内容&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt; &lt;!-- .ui-table --&gt;
</pre>

<div class="code"> 
	<h3>按钮</h3>
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
				<button class="btn btn-large" type="button">默认</button>
				<button class="btn" type="button">默认</button>
				<button class="btn btn-small" type="button">默认</button>
				<button class="btn btn-mini" type="button">默认</button>
				<button class="btn btn-mini disabled" disabled="disabled" type="button">默认</button>
			</td>
			<td><code>btn</code></td>
			<td>默认白色</td>
		  </tr>
		  <tr>
			<td><button class="btn btn-primary" type="button">蓝色</button></td>
			<td><code>btn btn-primary</code></td>
			<td>默认蓝色</td>
		  </tr>
		  <tr>
			<td><button class="btn btn-info" type="button">浅色</button></td>
			<td><code>btn btn-info</code></td>
			<td>默认浅色</td>
		  </tr>
		  <tr>
			<td><button class="btn btn-success" type="button">绿色</button></td>
			<td><code>btn btn-success</code></td>
			<td>默认绿色</td>
		  </tr>
		  <tr>
			<td><button class="btn btn-warning" type="button">黄色</button></td>
			<td><code>btn btn-warning</code></td>
			<td>默认黄色</td>
		  </tr>
		  <tr>
			<td><button class="btn btn-danger" type="button">红色</button></td>
			<td><code>btn btn-danger</code></td>
			<td>默认红色</td>
		  </tr>
		  <tr>
			<td><button class="btn btn-inverse" type="button">黑色</button></td>
			<td><code>btn btn-inverse</code></td>
			<td>默认黑色</td>
		  </tr>
		  <tr>
			<td><button class="btn btn-link" type="button">Link</button></td>
			<td><code>btn btn-link</code></td>
			<td>默认link样式</td>
		  </tr>
		</tbody>
    </table>
</div>
<pre class="brush: xml">
<h3>按钮(.ui-button)</h3>
&lt;button class=&quot;btn btn-large&quot; type=&quot;button&quot;&gt;默认&lt;/button&gt;
&lt;button class=&quot;btn&quot; type=&quot;button&quot;&gt;默认&lt;/button&gt;
&lt;button class=&quot;btn btn-small&quot; type=&quot;button&quot;&gt;默认&lt;/button&gt;
&lt;button class=&quot;btn btn-mini&quot; type=&quot;button&quot;&gt;默认&lt;/button&gt;
&lt;button class=&quot;btn btn-mini disabled&quot; disabled=&quot;disabled&quot; type=&quot;button&quot;>默认&lt;/button&gt;
</pre>

<div class="code"> 
	<h3>表单项</h3>
	<div class="ui-form-panel">
		<div class="ui-form-item">
			<label class="ui-label" for="">输入框</label>
			<input id="" class="ui-input ui-input-hover" placeholder="我是输入框" type="text" />
		</div>
		<div class="ui-form-item">
			<label class="ui-label" for="">文本输入区</label>
			<textarea class="ui-textarea"></textarea>
		</div>
	</div>
	<div class="ui-form-panel ui-form-cross mt5">
		<div class="ui-form-item">
			<label class="ui-label" for="">输入框</label>
			<input id="" class="ui-input" placeholder="我是输入框" type="text" />
			<input id="" class="ui-input ui-input-warning" placeholder="我是输入框" type="text" />
			<input id="" class="ui-input ui-input-error" placeholder="我是输入框" type="text" />
			<input id="" class="ui-input ui-input-success" placeholder="我是输入框" type="text" />
			<span class="ui-form-explain error">输入错误</span>
		</div>
		<div class="ui-form-item">
			<label class="ui-label" for="">文本输入区</label>
			<textarea class="ui-textarea"></textarea>
		</div>
	</div>
	<div class="ui-form-panel ui-form-cross ui-form-lbw mt5">
		<div class="ui-form-item">
			<label class="ui-label" for="">输入框</label>
			<input id="" class="ui-input ui-input-hover" placeholder="我是输入框" type="text" />
			<span class="ui-form-explain warning">输入错误</span>
		</div>
		<div class="ui-form-item">
			<label class="ui-label" for="">文本输入区</label>
			<textarea class="ui-textarea"></textarea>
		</div>
	</div>
</div>
<pre class="brush: xml">
<h3>表单项(.ui-input[label])</h3>
&lt;label class=&quot;ui-label&quot; for=""&gt;&lt;input id=&quot;&quot; class=&quot;ui-input ui-input-hover&quot; type=&quot;text&quot; /&gt;&lt;label&gt;

&lt;textarea class=&quot;ui-textarea&quot;&gt;&lt;/textarea&gt;
</pre>

<div class="code"> 
	<h3>表单</h3>
	<form name="" class="ui-form" method="post" action="#" id="">
		<fieldset>
			<div class="ui-form-panel ui-form-cross ui-form-lbw">
				<legend>表单标题</legend>
				<div class="ui-form-item">
					<label for="" class="ui-label"><em class="ui-form-required">*</em>表单项文本：</label>
					<input class="ui-input" type="text" />
					<span class="ui-form-explain">表单项填写说明</span>
				</div>	
				<div class="ui-form-item">
					<label for="" class="ui-label"><em class="ui-form-required">*</em>表单项文本：</label>
					<input class="ui-input ui-input-warning" type="text" />
					<span class="ui-form-explain warning">出错文案</span>
				</div>
				<div class="ui-form-item">
					<label for="" class="ui-label"><em class="ui-form-required">*</em>表单项文本：</label>
					<input class="ui-input ui-input-error" type="text" />
					<span class="ui-form-explain error">出错文案</span>
				</div>
				<div class="ui-form-item">
					<label for="" class="ui-label"><em class="ui-form-required">*</em>表单项文本：</label>
					<input class="ui-input ui-input-success" type="text" />
					<span class="ui-form-explain success">出错文案</span>
				</div>
				<div class="ui-form-item tr">
					<span class="ui-button">
						<input type="button" class="btn btn-large" value="确定"/>
						<button class="btn btn-large">确定</button>
						<input type="button" class="btn btn-small" value="确定"/>
						<button class="btn btn-small">确定</button>
						<input type="button" class="btn" value="确定"/>
						<button class="btn">确定</button>
						<input type="button" class="btn btn-mini" value="确定"/>
						<button class="btn btn-mini">确定</button>						
					</span>
				</div>
				<div class="ui-form-item"> 
					<button class="btn btn-block">确定</button>
				</div>
			</div>
		</fieldset>
	</form> <!-- .ui-form -->
</div>
<pre class="brush: xml">
<h3>表单(.ui-form)</h3>
&lt;form name="" class="ui-form" method="post" action="#" id=""&gt;
    &lt;fieldset&gt;
        &lt;legend&gt;表单标题&lt;/legend&gt;
        &lt;div class="ui-form-item"&gt;
            &lt;label for="" class="ui-label"&gt;&lt;em class="ui-form-required"&gt;*&lt;/em&gt;表单项文本：&lt;/label&gt;
            &lt;input class="ui-input" type="text" /&gt;
            &lt;p class="ui-form-explain"&gt;表单项填写说明&lt;/p&gt;
        &lt;/div&gt;
        
        &lt;div class="ui-form-item ui-form-error"&gt;
            &lt;label for="" class="ui-label"&gt;&lt;em class="ui-form-required"&gt;*&lt;/em&gt;表单项文本：&lt;/label&gt;
            &lt;input class="ui-input" type="text" /&gt;
            &lt;p class="ui-form-explain"&gt;出错文案&lt;/p&gt;
        &lt;/div&gt;
    
        &lt;div class="ui-form-item"&gt;
            &lt;span class="ui-button ui-button-ok"&gt;
                &lt;input class="ui-button-text" type="submit" value="确 定" /&gt;
            &lt;/span&gt;
        &lt;/div&gt;
        
    &lt;/fieldset&gt;
&lt;/form&gt; &lt;!-- .ui-form --&gt;
</pre>

<div class="code"> 
	<h3>提示消息</h3>
	<div class="clear">
		<!-- UI-tips-start-->
		<div class="alert ui-poptip fade in" id="alert-1">
			<div class="ui-poptip-shadow">
				<div class="ui-poptip-container">
					 <div class="ui-poptip-arrow-left">
						 <span>◆</span>
						 <em>◆</em>
					 </div>
					 <div class="ui-poptip-txt"> 
						提示1
					 </div>
				</div>
				<a href="javascript:;" data-dismiss="alert" data-target="#alert-1" class="close">×</a>
			</div>
		</div>
		<!-- UI-tips-end-->
		<!-- UI-tips-start-->
		<div class="alert ui-poptip fade in" id="alert-2">
			<div class="ui-poptip-shadow">
				<div class="ui-poptip-container">
					 <div class="ui-poptip-arrow-left ui-poptip-arrow-top">
						 <span>◆</span>
						 <em>◆</em>
					 </div>
					 <div class="ui-poptip-txt"> 
						提示2
					 </div>
				</div>
				<a href="javascript:;" data-dismiss="alert" data-target="#alert-2" class="close">×</a>
			</div>
		</div>
		<!-- UI-tips-end-->
		<!-- UI-tips-start-->
		<div class="alert ui-poptip fade in" id="alert-3">
			<div class="ui-poptip-shadow">
				<div class="ui-poptip-container">
					 <div class="ui-poptip-arrow-left ui-poptip-arrow-bottom">
						 <span>◆</span>
						 <em>◆</em>
					 </div>
					 <div class="ui-poptip-txt"> 
						提示3
					 </div>
				</div>
				<a href="javascript:;" data-dismiss="alert" data-target="#alert-3" class="close">×</a>
			</div>
		</div>
		<!-- UI-tips-end-->
		<!-- UI-tips-start-->
		<div class="alert ui-poptip fade in" id="alert-4">
			<div class="ui-poptip-shadow">
				<div class="ui-poptip-container">
					 <div class="ui-poptip-arrow-left ui-poptip-arrow-right">
						 <span>◆</span>
						 <em>◆</em>
					 </div>
					 <div class="ui-poptip-txt"> 
						提示4
					 </div>
				</div>
				<a href="javascript:;" data-dismiss="alert" data-target="#alert-4" class="close">×</a>
			</div>
		</div>
		<!-- UI-tips-end-->
		<!-- UI-tips-start-->
		<div class="alert ui-poptip cus-poptip fade in" id="alert-5">
			<div class="ui-poptip-shadow">
				<div class="ui-poptip-container">
					 <div class="ui-poptip-arrow-left ui-poptip-arrow-right">
						 <span>◆</span>
						 <em>◆</em>
					 </div>
					 <div class="ui-poptip-txt"> 
						提示5
					 </div>
				</div>
				 <a href="javascript:;" data-dismiss="alert" data-target="#alert-5" class="close">×</a>
			</div>
		</div>
		<!-- UI-tips-end-->
	</div>
	<div> 
		<div class="alert fade in">
			<a href="javascript:;" data-dismiss="alert" class="close">×</a>
            <strong>提示：</strong> 要看清楚噢
        </div>
		<div class="alert alert-success fade in">
            <a href="javascript:;" data-dismiss="alert" class="close">×</a>
            <strong>提示：</strong> 要看清楚噢
        </div>
		<div class="alert alert-danger fade in">
            <a href="javascript:;" data-dismiss="alert" class="close">×</a>
            <strong>提示：</strong> 要看清楚噢
        </div>
		<div class="alert alert-info fade in">
            <a href="javascript:;" data-dismiss="alert" class="close">×</a>
            <strong>提示：</strong> 要看清楚噢
        </div>
	</div>
</div>
<pre class="brush: xml">
<h3>浮层信息(.ui-tip)</h3>
&lt;div class=&quot;ui-tip&quot;&gt;
	&lt;div class=&quot;ui-tip-cnt&quot;&gt;
		我是提示内容
	&lt;/div&gt;
	&lt;span class=&quot;ui-icon ui-icon-uarr&quot;&gt;&uarr;&lt;/span&gt;
&lt;/div&gt; &lt;!-- .ui-tip --&gt;
</pre>

<div class="code"> 
	<h3>tabs</h3>
	<div class="clear"> 
		<div class="ui-tabs"> 
			<ul class="nav nav-tabs clear m-link">
				<li class="active"><a href="#tab1" data-toggle="tab">充值</a></li>
				<li><a href="#tab2" data-toggle="tab">旅游</a></li>
				<li><a href="#tab3" data-toggle="tab">彩票</a></li>
				<li><a href="#tab4" data-toggle="tab">游戏</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tab1">
					<p>神奇的效果1</p>
				</div>
				<div class="tab-pane fade" id="tab2">
					<p>神奇的效果2</p>
				</div>
				<div class="tab-pane fade" id="tab3">
					<p>神奇的效果3</p>
				</div>
				<div class="tab-pane fade" id="tab4">
					<p>神奇的效果4</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clear mt10">
		<div class="ui-tabs ui-pills"> 
			<ul class="nav nav-pills clear m-tmp-link">
			  <li class="active"><a href="#tabp1" data-toggle="tab">充值</a></li>
			  <li><a href="#tabp2" data-toggle="tab">旅游</a></li>
			  <li><a href="#tabp3" data-toggle="tab">彩票</a></li>
			  <li><a href="#tabp4" data-toggle="tab">游戏</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tabp1">
					<p>神奇的效果1</p>
				</div>
				<div class="tab-pane fade" id="tabp2">
					<p>神奇的效果2</p>
				</div>
				<div class="tab-pane fade" id="tabp3">
					<p>神奇的效果3</p>
				</div>
				<div class="tab-pane fade" id="tabp4">
					<p>神奇的效果4</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clear mt10">
		<div class="ui-tabs ui-pills ui-pills-tmp"> 
			<ul class="nav nav-pills clear m-tmp-link">
			  <li class="active"><a href="#tabp5" data-toggle="tab">充值</a></li>
			  <li><a href="#tabp6" data-toggle="tab">旅游</a></li>
			  <li class="disabled"><a>彩票</a></li>
			  <li><a href="#tabp8" data-toggle="tab">游戏</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tabp5">
					<p>神奇的效果1</p>
				</div>
				<div class="tab-pane fade" id="tabp6">
					<p>神奇的效果2</p>
				</div>
				<div class="tab-pane fade" id="tabp7">
					<p>神奇的效果3</p>
				</div>
				<div class="tab-pane fade" id="tabp8">
					<p>神奇的效果4</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clear mt10"> 
		<ul class="nav nav-tabs nav-stacked m-tmp-link" style="width:300px;">
		  <li class="active"><a href="javascript:;">充值</a></li>
		  <li><a href="javascript:;">旅游</a></li>
		  <li><a href="javascript:;">彩票</a></li>
        </ul>
	</div>
	<div class="clear mt10"> 
		<div class="ui-tabs">
			<ul class="nav nav-pills nav-stacked m-tmp-link" style="width:300px;">
			  <li class="active"><a href="javascript:;">充值</a></li>
			  <li><a href="javascript:;">旅游</a></li>
			  <li><a href="javascript:;">彩票</a></li>
			</ul>
		</div>
	</div>
	<div class="clear mt10"> 
		<div class="ui-tabs ui-pills-tmp">
			<ul class="nav nav-pills nav-stacked m-tmp-link" style="width:300px;">
			  <li class="active"><a href="javascript:;">充值</a></li>
			  <li><a href="javascript:;">旅游</a></li>
			  <li><a href="javascript:;">彩票</a></li>
			</ul>
		</div>
	</div>
	<div class="clear mt10"> 
		<div class="ui-tabs tabs-below"> 
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tabb1">
					<p>神奇的效果1</p>
				</div>
				<div class="tab-pane fade" id="tabb2">
					<p>神奇的效果2</p>
				</div>
				<div class="tab-pane fade" id="tabb3">
					<p>神奇的效果3</p>
				</div>
				<div class="tab-pane fade" id="tabb4">
					<p>神奇的效果4</p>
				</div>
			</div>
			<ul class="nav nav-tabs clear m-link">
				<li class="active"><a href="#tabb1" data-toggle="tab">充值</a></li>
				<li><a href="#tabb2" data-toggle="tab">旅游</a></li>
				<li><a href="#tabb3" data-toggle="tab">彩票</a></li>
				<li><a href="#tabb4" data-toggle="tab">游戏</a></li>
			</ul>
		</div>
	</div>
	<div class="clear mt10"> 
		<div class="ui-tabs tabs-left"> 
			<ul class="nav nav-tabs clear m-link">
				<li class="active"><a href="#tabl1" data-toggle="tab">充值</a></li>
				<li><a href="#tabl2" data-toggle="tab">旅游</a></li>
				<li><a href="#tabl3" data-toggle="tab">彩票</a></li>
				<li><a href="#tabl4" data-toggle="tab">游戏</a></li>
			</ul>
			<div class="tab-content" style="height:129px;overflow:hidden;">
				<div class="tab-pane fade in active" id="tabl1">
					<p>神奇的效果1</p>
				</div>
				<div class="tab-pane fade" id="tabl2">
					<p>神奇的效果2</p>
				</div>
				<div class="tab-pane fade" id="tabl3">
					<p>神奇的效果3</p>
				</div>
				<div class="tab-pane fade" id="tabl4">
					<p>神奇的效果4</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clear mt10"> 
		<div class="ui-tabs tabs-right"> 
			<ul class="nav nav-tabs clear m-link">
				<li class="active"><a href="#tabr1" data-toggle="tab">充值</a></li>
				<li><a href="#tabr2" data-toggle="tab">旅游</a></li>
				<li><a href="#tabr3" data-toggle="tab">彩票</a></li>
				<li><a href="#tabr4" data-toggle="tab">游戏</a></li>
			</ul>
			<div class="tab-content" style="height:129px;overflow:hidden;">
				<div class="tab-pane fade in active" id="tabr1">
					<p>神奇的效果1</p>
				</div>
				<div class="tab-pane fade" id="tabr2">
					<p>神奇的效果2</p>
				</div>
				<div class="tab-pane fade" id="tabr3">
					<p>神奇的效果3</p>
				</div>
				<div class="tab-pane fade" id="tabr4">
					<p>神奇的效果4</p>
				</div>
			</div>
		</div>
	</div>
</div>
<pre class="brush: xml">
<h3>TAB(.ui-tab)</h3>
&lt;div class="ui-tab"&gt;

	&lt;div class="ui-tab-trigger"&gt; 
		&lt;ul&gt; 
			&lt;li class="ui-tab-trigger-item"&gt;&lt;a href="#"&gt;标题一&lt;/a&gt;&lt;/li&gt;
			&lt;li class="ui-tab-trigger-item ui-tab-trigger-item-current"&gt;&lt;a href="#"&gt;当前选中项&lt;/a&gt;&lt;/li&gt;
			&lt;li class="ui-tab-trigger-item"&gt;&lt;a href="#"&gt;其他项&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;

	&lt;div class="ui-tab-cnt"&gt;
		&lt;div class="ui-tab-cnt-item ui-tab-cnt-item-current"&gt;
			基础 ui-tab
		&lt;/div&gt;
		&lt;div class="ui-tab-cnt-item"&gt;
			基础 ui-tab
		&lt;/div&gt;
	&lt;/div&gt;
	
&lt;/div&gt; &lt;!-- .ui-tab --&gt;
</pre>
<div class="code"> 
	<h3>横向通栏</h3>
	<div class="clear"> 
		<div class="ui-tabs" style="width:300px;">
			<div class="navbar">
				<div class="navbar-inner">
					<ul class="nav">
						<li class="active"><a href="#tabn1" data-toggle="tab">充值</a></li>
						<li class="divider-vertical"></li>
						<li><a href="#tabn2" data-toggle="tab">旅游</a></li>
						<li class="divider-vertical"></li>
						<li><a href="#tabn3" data-toggle="tab">彩票</a></li>
						<li class="divider-vertical"></li>
						<li><a href="#tabn4" data-toggle="tab">游戏</a></li>
					</ul>
				</div>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tabn1">
					<p>神奇的效果1</p>
				</div>
				<div class="tab-pane fade" id="tabn2">
					<p>神奇的效果2</p>
				</div>
				<div class="tab-pane fade" id="tabn3">
					<p>神奇的效果3</p>
				</div>
				<div class="tab-pane fade" id="tabn4">
					<p>神奇的效果4</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clear mt10"> 
		<div class="ui-tabs" style="width:300px;">
			<div class="navbar">
				<div class="navbar-inner">
					<ul class="nav">
						<li class="active"><a href="#tabn5" data-toggle="tab">充值</a></li>
						<li><a href="#tabn6" data-toggle="tab">旅游</a></li>
						<li><a href="#tabn7" data-toggle="tab">彩票</a></li>
						<li><a href="#tabn8" data-toggle="tab">游戏</a></li>
					</ul>
				</div>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tabn5">
					<p>神奇的效果1</p>
				</div>
				<div class="tab-pane fade" id="tabn6">
					<p>神奇的效果2</p>
				</div>
				<div class="tab-pane fade" id="tabn7">
					<p>神奇的效果3</p>
				</div>
				<div class="tab-pane fade" id="tabn8">
					<p>神奇的效果4</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clear mt10"> 
		<div class="ui-tabs ui-tabs-cusnav" style="width:300px;">
			<div class="navbar">
				<div class="navbar-inner">
					<ul class="nav">
						<li class="active"><a href="#tabn9" data-toggle="tab">充值</a></li>
						<li><a href="#tabn10" data-toggle="tab">旅游</a></li>
						<li><a href="#tabn11" data-toggle="tab">彩票</a></li>
						<li><a href="#tabn12" data-toggle="tab">游戏</a></li>
						<li><a href="#tabn13" data-toggle="tab">玩乐</a></li>
					</ul>
				</div>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tabn9">
					<p>神奇的效果1</p>
				</div>
				<div class="tab-pane fade" id="tabn10">
					<p>神奇的效果2</p>
				</div>
				<div class="tab-pane fade" id="tabn11">
					<p>神奇的效果3</p>
				</div>
				<div class="tab-pane fade" id="tabn12">
					<p>神奇的效果4</p>
				</div>
				<div class="tab-pane fade" id="tabn13">
					<p>神奇的效果5</p>
				</div>
			</div>
		</div>
	</div>
</div>
<pre class="brush: xml">
	<h3>横向通栏</h3>
</pre>

<div class="code"> 
	<h3>下拉菜单</h3>
	<div> 
		<div class="dropdown clear">
		    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
				<li><a tabindex="-1" href="#">充值</a></li>
				<li><a tabindex="-1" href="#">旅游</a></li>
				<li><a tabindex="-1" href="#">彩票</a></li>
				<li class="divider"></li>
				<li><a tabindex="-1" href="#">游戏</a></li>
			</ul>
		</div>
		<div class="dropdown ui-dropdown-cus clear" >
		    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
				<li><a tabindex="-1" href="#">充值</a></li>
				<li><a tabindex="-1" href="#">旅游</a></li>
				<li><a tabindex="-1" href="#">彩票</a></li>
				<li><a tabindex="-1" href="#">游戏</a></li>
			</ul>
		</div>
	</div>
	<div class="clear"> 
		<div class="btn-group fl">
			<button data-toggle="dropdown" class="btn dropdown-toggle">下拉 <span class="caret"></span></button>
			<ul class="dropdown-menu">
				  <li><a href="#">充值</a></li>
				  <li><a href="#">旅游</a></li>
				  <li><a href="#">彩票</a></li>
				  <li><a href="#">游戏</a></li>
			</ul>
		</div>
		<div class="btn-group fl" style="margin-left:5px;">
			<button class="btn">下拉</button>
			<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">充值</a></li>
				<li><a href="#">旅游</a></li>
				<li><a href="#">彩票</a></li>
				<li><a href="#">游戏</a></li>
			</ul>
		</div>
	</div>
</div>
<pre class="brush: xml">
<h3>下拉菜单(.ui-dropdown）</h3>
&lt;div class=&quot;ui-dropdown ui-dropdown-active&quot;&gt;
	&lt;div class=&quot;ui-dropdown-header&quot;&gt;
		&lt;a href=&quot;#&quot;&gt;请选择xxx&lt;/a&gt;
	&lt;/div&gt;
	&lt;div class=&quot;ui-dropdown-cnt&quot;&gt;
	&lt;/div&gt;
&lt;/div&gt; &lt;!-- .ui-dropdown --&gt;
</pre>
<div class="code"> 
	<h2 >jquery UI图标</h2>
	<ul id="icons" class="clear">
		<li class="ui-state-default ui-icon-deg180" title=".ui-icon-carat-1-n"><span class="ui-icon ui-icon-carat-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-ne"><span class="ui-icon ui-icon-carat-1-ne"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-e"><span class="ui-icon ui-icon-carat-1-e"></span></li>

		<li class="ui-state-default" title=".ui-icon-carat-1-se"><span class="ui-icon ui-icon-carat-1-se"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-s"><span class="ui-icon ui-icon-carat-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-sw"><span class="ui-icon ui-icon-carat-1-sw"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-w"><span class="ui-icon ui-icon-carat-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-nw"><span class="ui-icon ui-icon-carat-1-nw"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-2-n-s"><span class="ui-icon ui-icon-carat-2-n-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-2-e-w"><span class="ui-icon ui-icon-carat-2-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-n"><span class="ui-icon ui-icon-triangle-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-ne"><span class="ui-icon ui-icon-triangle-1-ne"></span></li>

		<li class="ui-state-default" title=".ui-icon-triangle-1-e"><span class="ui-icon ui-icon-triangle-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-se"><span class="ui-icon ui-icon-triangle-1-se"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-s"><span class="ui-icon ui-icon-triangle-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-sw"><span class="ui-icon ui-icon-triangle-1-sw"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-w"><span class="ui-icon ui-icon-triangle-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-nw"><span class="ui-icon ui-icon-triangle-1-nw"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-2-n-s"><span class="ui-icon ui-icon-triangle-2-n-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-2-e-w"><span class="ui-icon ui-icon-triangle-2-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-n"><span class="ui-icon ui-icon-arrow-1-n"></span></li>

		<li class="ui-state-default" title=".ui-icon-arrow-1-ne"><span class="ui-icon ui-icon-arrow-1-ne"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-e"><span class="ui-icon ui-icon-arrow-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-se"><span class="ui-icon ui-icon-arrow-1-se"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-s"><span class="ui-icon ui-icon-arrow-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-sw"><span class="ui-icon ui-icon-arrow-1-sw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-w"><span class="ui-icon ui-icon-arrow-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-nw"><span class="ui-icon ui-icon-arrow-1-nw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-2-n-s"><span class="ui-icon ui-icon-arrow-2-n-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-2-ne-sw"><span class="ui-icon ui-icon-arrow-2-ne-sw"></span></li>

		<li class="ui-state-default" title=".ui-icon-arrow-2-e-w"><span class="ui-icon ui-icon-arrow-2-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-2-se-nw"><span class="ui-icon ui-icon-arrow-2-se-nw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowstop-1-n"><span class="ui-icon ui-icon-arrowstop-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowstop-1-e"><span class="ui-icon ui-icon-arrowstop-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowstop-1-s"><span class="ui-icon ui-icon-arrowstop-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowstop-1-w"><span class="ui-icon ui-icon-arrowstop-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-n"><span class="ui-icon ui-icon-arrowthick-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-ne"><span class="ui-icon ui-icon-arrowthick-1-ne"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-e"><span class="ui-icon ui-icon-arrowthick-1-e"></span></li>

		<li class="ui-state-default" title=".ui-icon-arrowthick-1-se"><span class="ui-icon ui-icon-arrowthick-1-se"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-s"><span class="ui-icon ui-icon-arrowthick-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-sw"><span class="ui-icon ui-icon-arrowthick-1-sw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-w"><span class="ui-icon ui-icon-arrowthick-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-nw"><span class="ui-icon ui-icon-arrowthick-1-nw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-2-n-s"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-2-ne-sw"><span class="ui-icon ui-icon-arrowthick-2-ne-sw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-2-e-w"><span class="ui-icon ui-icon-arrowthick-2-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-2-se-nw"><span class="ui-icon ui-icon-arrowthick-2-se-nw"></span></li>

		<li class="ui-state-default" title=".ui-icon-arrowthickstop-1-n"><span class="ui-icon ui-icon-arrowthickstop-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthickstop-1-e"><span class="ui-icon ui-icon-arrowthickstop-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthickstop-1-s"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthickstop-1-w"><span class="ui-icon ui-icon-arrowthickstop-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturnthick-1-w"><span class="ui-icon ui-icon-arrowreturnthick-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturnthick-1-n"><span class="ui-icon ui-icon-arrowreturnthick-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturnthick-1-e"><span class="ui-icon ui-icon-arrowreturnthick-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturnthick-1-s"><span class="ui-icon ui-icon-arrowreturnthick-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturn-1-w"><span class="ui-icon ui-icon-arrowreturn-1-w"></span></li>

		<li class="ui-state-default" title=".ui-icon-arrowreturn-1-n"><span class="ui-icon ui-icon-arrowreturn-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturn-1-e"><span class="ui-icon ui-icon-arrowreturn-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturn-1-s"><span class="ui-icon ui-icon-arrowreturn-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowrefresh-1-w"><span class="ui-icon ui-icon-arrowrefresh-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowrefresh-1-n"><span class="ui-icon ui-icon-arrowrefresh-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowrefresh-1-e"><span class="ui-icon ui-icon-arrowrefresh-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowrefresh-1-s"><span class="ui-icon ui-icon-arrowrefresh-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-4"><span class="ui-icon ui-icon-arrow-4"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-4-diag"><span class="ui-icon ui-icon-arrow-4-diag"></span></li>

		<li class="ui-state-default" title=".ui-icon-extlink"><span class="ui-icon ui-icon-extlink"></span></li>
		<li class="ui-state-default" title=".ui-icon-newwin"><span class="ui-icon ui-icon-newwin"></span></li>
		<li class="ui-state-default" title=".ui-icon-refresh"><span class="ui-icon ui-icon-refresh"></span></li>
		<li class="ui-state-default" title=".ui-icon-shuffle"><span class="ui-icon ui-icon-shuffle"></span></li>
		<li class="ui-state-default" title=".ui-icon-transfer-e-w"><span class="ui-icon ui-icon-transfer-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-transferthick-e-w"><span class="ui-icon ui-icon-transferthick-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-folder-collapsed"><span class="ui-icon ui-icon-folder-collapsed"></span></li>
		<li class="ui-state-default" title=".ui-icon-folder-open"><span class="ui-icon ui-icon-folder-open"></span></li>
		<li class="ui-state-default" title=".ui-icon-document"><span class="ui-icon ui-icon-document"></span></li>

		<li class="ui-state-default" title=".ui-icon-document-b"><span class="ui-icon ui-icon-document-b"></span></li>
		<li class="ui-state-default" title=".ui-icon-note"><span class="ui-icon ui-icon-note"></span></li>
		<li class="ui-state-default" title=".ui-icon-mail-closed"><span class="ui-icon ui-icon-mail-closed"></span></li>
		<li class="ui-state-default" title=".ui-icon-mail-open"><span class="ui-icon ui-icon-mail-open"></span></li>
		<li class="ui-state-default" title=".ui-icon-suitcase"><span class="ui-icon ui-icon-suitcase"></span></li>
		<li class="ui-state-default" title=".ui-icon-comment"><span class="ui-icon ui-icon-comment"></span></li>
		<li class="ui-state-default" title=".ui-icon-person"><span class="ui-icon ui-icon-person"></span></li>
		<li class="ui-state-default" title=".ui-icon-print"><span class="ui-icon ui-icon-print"></span></li>
		<li class="ui-state-default" title=".ui-icon-trash"><span class="ui-icon ui-icon-trash"></span></li>

		<li class="ui-state-default" title=".ui-icon-locked"><span class="ui-icon ui-icon-locked"></span></li>
		<li class="ui-state-default" title=".ui-icon-unlocked"><span class="ui-icon ui-icon-unlocked"></span></li>
		<li class="ui-state-default" title=".ui-icon-bookmark"><span class="ui-icon ui-icon-bookmark"></span></li>
		<li class="ui-state-default" title=".ui-icon-tag"><span class="ui-icon ui-icon-tag"></span></li>
		<li class="ui-state-default" title=".ui-icon-home"><span class="ui-icon ui-icon-home"></span></li>
		<li class="ui-state-default" title=".ui-icon-flag"><span class="ui-icon ui-icon-flag"></span></li>
		<li class="ui-state-default" title=".ui-icon-calculator"><span class="ui-icon ui-icon-calculator"></span></li>
		<li class="ui-state-default" title=".ui-icon-cart"><span class="ui-icon ui-icon-cart"></span></li>
		<li class="ui-state-default" title=".ui-icon-pencil"><span class="ui-icon ui-icon-pencil"></span></li>

		<li class="ui-state-default" title=".ui-icon-clock"><span class="ui-icon ui-icon-clock"></span></li>
		<li class="ui-state-default" title=".ui-icon-disk"><span class="ui-icon ui-icon-disk"></span></li>
		<li class="ui-state-default" title=".ui-icon-calendar"><span class="ui-icon ui-icon-calendar"></span></li>
		<li class="ui-state-default" title=".ui-icon-zoomin"><span class="ui-icon ui-icon-zoomin"></span></li>
		<li class="ui-state-default" title=".ui-icon-zoomout"><span class="ui-icon ui-icon-zoomout"></span></li>
		<li class="ui-state-default" title=".ui-icon-search"><span class="ui-icon ui-icon-search"></span></li>
		<li class="ui-state-default" title=".ui-icon-wrench"><span class="ui-icon ui-icon-wrench"></span></li>
		<li class="ui-state-default" title=".ui-icon-gear"><span class="ui-icon ui-icon-gear"></span></li>
		<li class="ui-state-default" title=".ui-icon-heart"><span class="ui-icon ui-icon-heart"></span></li>

		<li class="ui-state-default" title=".ui-icon-star"><span class="ui-icon ui-icon-star"></span></li>
		<li class="ui-state-default" title=".ui-icon-link"><span class="ui-icon ui-icon-link"></span></li>
		<li class="ui-state-default" title=".ui-icon-cancel"><span class="ui-icon ui-icon-cancel"></span></li>
		<li class="ui-state-default" title=".ui-icon-plus"><span class="ui-icon ui-icon-plus"></span></li>
		<li class="ui-state-default" title=".ui-icon-plusthick"><span class="ui-icon ui-icon-plusthick"></span></li>
		<li class="ui-state-default" title=".ui-icon-minus"><span class="ui-icon ui-icon-minus"></span></li>
		<li class="ui-state-default" title=".ui-icon-minusthick"><span class="ui-icon ui-icon-minusthick"></span></li>
		<li class="ui-state-default" title=".ui-icon-close"><span class="ui-icon ui-icon-close"></span></li>
		<li class="ui-state-default" title=".ui-icon-closethick"><span class="ui-icon ui-icon-closethick"></span></li>

		<li class="ui-state-default" title=".ui-icon-key"><span class="ui-icon ui-icon-key"></span></li>
		<li class="ui-state-default" title=".ui-icon-lightbulb"><span class="ui-icon ui-icon-lightbulb"></span></li>
		<li class="ui-state-default" title=".ui-icon-scissors"><span class="ui-icon ui-icon-scissors"></span></li>
		<li class="ui-state-default" title=".ui-icon-clipboard"><span class="ui-icon ui-icon-clipboard"></span></li>
		<li class="ui-state-default" title=".ui-icon-copy"><span class="ui-icon ui-icon-copy"></span></li>
		<li class="ui-state-default" title=".ui-icon-contact"><span class="ui-icon ui-icon-contact"></span></li>
		<li class="ui-state-default" title=".ui-icon-image"><span class="ui-icon ui-icon-image"></span></li>
		<li class="ui-state-default" title=".ui-icon-video"><span class="ui-icon ui-icon-video"></span></li>
		<li class="ui-state-default" title=".ui-icon-script"><span class="ui-icon ui-icon-script"></span></li>
		<li class="ui-state-default" title=".ui-icon-alert"><span class="ui-icon ui-icon-alert"></span></li>

		<li class="ui-state-default" title=".ui-icon-info"><span class="ui-icon ui-icon-info"></span></li>
		<li class="ui-state-default" title=".ui-icon-notice"><span class="ui-icon ui-icon-notice"></span></li>
		<li class="ui-state-default" title=".ui-icon-help"><span class="ui-icon ui-icon-help"></span></li>
		<li class="ui-state-default" title=".ui-icon-check"><span class="ui-icon ui-icon-check"></span></li>
		<li class="ui-state-default" title=".ui-icon-bullet"><span class="ui-icon ui-icon-bullet"></span></li>
		<li class="ui-state-default" title=".ui-icon-radio-off"><span class="ui-icon ui-icon-radio-off"></span></li>
		<li class="ui-state-default" title=".ui-icon-radio-on"><span class="ui-icon ui-icon-radio-on"></span></li>
		<li class="ui-state-default" title=".ui-icon-pin-w"><span class="ui-icon ui-icon-pin-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-pin-s"><span class="ui-icon ui-icon-pin-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-play"><span class="ui-icon ui-icon-play"></span></li>
		<li class="ui-state-default" title=".ui-icon-pause"><span class="ui-icon ui-icon-pause"></span></li>

		<li class="ui-state-default" title=".ui-icon-seek-next"><span class="ui-icon ui-icon-seek-next"></span></li>
		<li class="ui-state-default" title=".ui-icon-seek-prev"><span class="ui-icon ui-icon-seek-prev"></span></li>
		<li class="ui-state-default" title=".ui-icon-seek-end"><span class="ui-icon ui-icon-seek-end"></span></li>
		<li class="ui-state-default" title=".ui-icon-seek-first"><span class="ui-icon ui-icon-seek-first"></span></li>
		<li class="ui-state-default" title=".ui-icon-stop"><span class="ui-icon ui-icon-stop"></span></li>
		<li class="ui-state-default" title=".ui-icon-eject"><span class="ui-icon ui-icon-eject"></span></li>
		<li class="ui-state-default" title=".ui-icon-volume-off"><span class="ui-icon ui-icon-volume-off"></span></li>
		<li class="ui-state-default" title=".ui-icon-volume-on"><span class="ui-icon ui-icon-volume-on"></span></li>
		<li class="ui-state-default" title=".ui-icon-power"><span class="ui-icon ui-icon-power"></span></li>

		<li class="ui-state-default" title=".ui-icon-signal-diag"><span class="ui-icon ui-icon-signal-diag"></span></li>
		<li class="ui-state-default" title=".ui-icon-signal"><span class="ui-icon ui-icon-signal"></span></li>
		<li class="ui-state-default" title=".ui-icon-battery-0"><span class="ui-icon ui-icon-battery-0"></span></li>
		<li class="ui-state-default" title=".ui-icon-battery-1"><span class="ui-icon ui-icon-battery-1"></span></li>
		<li class="ui-state-default" title=".ui-icon-battery-2"><span class="ui-icon ui-icon-battery-2"></span></li>
		<li class="ui-state-default" title=".ui-icon-battery-3"><span class="ui-icon ui-icon-battery-3"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-plus"><span class="ui-icon ui-icon-circle-plus"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-minus"><span class="ui-icon ui-icon-circle-minus"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-close"><span class="ui-icon ui-icon-circle-close"></span></li>

		<li class="ui-state-default" title=".ui-icon-circle-triangle-e"><span class="ui-icon ui-icon-circle-triangle-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-triangle-s"><span class="ui-icon ui-icon-circle-triangle-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-triangle-w"><span class="ui-icon ui-icon-circle-triangle-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-triangle-n"><span class="ui-icon ui-icon-circle-triangle-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-arrow-e"><span class="ui-icon ui-icon-circle-arrow-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-arrow-s"><span class="ui-icon ui-icon-circle-arrow-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-arrow-w"><span class="ui-icon ui-icon-circle-arrow-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-arrow-n"><span class="ui-icon ui-icon-circle-arrow-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-zoomin"><span class="ui-icon ui-icon-circle-zoomin"></span></li>

		<li class="ui-state-default" title=".ui-icon-circle-zoomout"><span class="ui-icon ui-icon-circle-zoomout"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-check"><span class="ui-icon ui-icon-circle-check"></span></li>
		<li class="ui-state-default" title=".ui-icon-circlesmall-plus"><span class="ui-icon ui-icon-circlesmall-plus"></span></li>
		<li class="ui-state-default" title=".ui-icon-circlesmall-minus"><span class="ui-icon ui-icon-circlesmall-minus"></span></li>
		<li class="ui-state-default" title=".ui-icon-circlesmall-close"><span class="ui-icon ui-icon-circlesmall-close"></span></li>
		<li class="ui-state-default" title=".ui-icon-squaresmall-plus"><span class="ui-icon ui-icon-squaresmall-plus"></span></li>
		<li class="ui-state-default" title=".ui-icon-squaresmall-minus"><span class="ui-icon ui-icon-squaresmall-minus"></span></li>
		<li class="ui-state-default" title=".ui-icon-squaresmall-close"><span class="ui-icon ui-icon-squaresmall-close"></span></li>
		<li class="ui-state-default" title=".ui-icon-grip-dotted-vertical"><span class="ui-icon ui-icon-grip-dotted-vertical"></span></li>

		<li class="ui-state-default" title=".ui-icon-grip-dotted-horizontal"><span class="ui-icon ui-icon-grip-dotted-horizontal"></span></li>
		<li class="ui-state-default" title=".ui-icon-grip-solid-vertical"><span class="ui-icon ui-icon-grip-solid-vertical"></span></li>
		<li class="ui-state-default" title=".ui-icon-grip-solid-horizontal"><span class="ui-icon ui-icon-grip-solid-horizontal"></span></li>
		<li class="ui-state-default" title=".ui-icon-gripsmall-diagonal-se"><span class="ui-icon ui-icon-gripsmall-diagonal-se"></span></li>
		<li class="ui-state-default" title=".ui-icon-grip-diagonal-se"><span class="ui-icon ui-icon-grip-diagonal-se"></span></li>
	</ul>
	<ul id="icons" class="ui-widget clear">
		<li class="ui-state-default ui-icon-deg180" title=".ui-icon-carat-1-n"><span class="ui-icon ui-icon-carat-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-ne"><span class="ui-icon ui-icon-carat-1-ne"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-e"><span class="ui-icon ui-icon-carat-1-e"></span></li>

		<li class="ui-state-default" title=".ui-icon-carat-1-se"><span class="ui-icon ui-icon-carat-1-se"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-s"><span class="ui-icon ui-icon-carat-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-sw"><span class="ui-icon ui-icon-carat-1-sw"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-w"><span class="ui-icon ui-icon-carat-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-1-nw"><span class="ui-icon ui-icon-carat-1-nw"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-2-n-s"><span class="ui-icon ui-icon-carat-2-n-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-carat-2-e-w"><span class="ui-icon ui-icon-carat-2-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-n"><span class="ui-icon ui-icon-triangle-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-ne"><span class="ui-icon ui-icon-triangle-1-ne"></span></li>

		<li class="ui-state-default" title=".ui-icon-triangle-1-e"><span class="ui-icon ui-icon-triangle-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-se"><span class="ui-icon ui-icon-triangle-1-se"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-s"><span class="ui-icon ui-icon-triangle-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-sw"><span class="ui-icon ui-icon-triangle-1-sw"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-w"><span class="ui-icon ui-icon-triangle-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-1-nw"><span class="ui-icon ui-icon-triangle-1-nw"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-2-n-s"><span class="ui-icon ui-icon-triangle-2-n-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-triangle-2-e-w"><span class="ui-icon ui-icon-triangle-2-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-n"><span class="ui-icon ui-icon-arrow-1-n"></span></li>

		<li class="ui-state-default" title=".ui-icon-arrow-1-ne"><span class="ui-icon ui-icon-arrow-1-ne"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-e"><span class="ui-icon ui-icon-arrow-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-se"><span class="ui-icon ui-icon-arrow-1-se"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-s"><span class="ui-icon ui-icon-arrow-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-sw"><span class="ui-icon ui-icon-arrow-1-sw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-w"><span class="ui-icon ui-icon-arrow-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-1-nw"><span class="ui-icon ui-icon-arrow-1-nw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-2-n-s"><span class="ui-icon ui-icon-arrow-2-n-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-2-ne-sw"><span class="ui-icon ui-icon-arrow-2-ne-sw"></span></li>

		<li class="ui-state-default" title=".ui-icon-arrow-2-e-w"><span class="ui-icon ui-icon-arrow-2-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-2-se-nw"><span class="ui-icon ui-icon-arrow-2-se-nw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowstop-1-n"><span class="ui-icon ui-icon-arrowstop-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowstop-1-e"><span class="ui-icon ui-icon-arrowstop-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowstop-1-s"><span class="ui-icon ui-icon-arrowstop-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowstop-1-w"><span class="ui-icon ui-icon-arrowstop-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-n"><span class="ui-icon ui-icon-arrowthick-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-ne"><span class="ui-icon ui-icon-arrowthick-1-ne"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-e"><span class="ui-icon ui-icon-arrowthick-1-e"></span></li>

		<li class="ui-state-default" title=".ui-icon-arrowthick-1-se"><span class="ui-icon ui-icon-arrowthick-1-se"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-s"><span class="ui-icon ui-icon-arrowthick-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-sw"><span class="ui-icon ui-icon-arrowthick-1-sw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-w"><span class="ui-icon ui-icon-arrowthick-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-1-nw"><span class="ui-icon ui-icon-arrowthick-1-nw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-2-n-s"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-2-ne-sw"><span class="ui-icon ui-icon-arrowthick-2-ne-sw"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-2-e-w"><span class="ui-icon ui-icon-arrowthick-2-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthick-2-se-nw"><span class="ui-icon ui-icon-arrowthick-2-se-nw"></span></li>

		<li class="ui-state-default" title=".ui-icon-arrowthickstop-1-n"><span class="ui-icon ui-icon-arrowthickstop-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthickstop-1-e"><span class="ui-icon ui-icon-arrowthickstop-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthickstop-1-s"><span class="ui-icon ui-icon-arrowthickstop-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowthickstop-1-w"><span class="ui-icon ui-icon-arrowthickstop-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturnthick-1-w"><span class="ui-icon ui-icon-arrowreturnthick-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturnthick-1-n"><span class="ui-icon ui-icon-arrowreturnthick-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturnthick-1-e"><span class="ui-icon ui-icon-arrowreturnthick-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturnthick-1-s"><span class="ui-icon ui-icon-arrowreturnthick-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturn-1-w"><span class="ui-icon ui-icon-arrowreturn-1-w"></span></li>

		<li class="ui-state-default" title=".ui-icon-arrowreturn-1-n"><span class="ui-icon ui-icon-arrowreturn-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturn-1-e"><span class="ui-icon ui-icon-arrowreturn-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowreturn-1-s"><span class="ui-icon ui-icon-arrowreturn-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowrefresh-1-w"><span class="ui-icon ui-icon-arrowrefresh-1-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowrefresh-1-n"><span class="ui-icon ui-icon-arrowrefresh-1-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowrefresh-1-e"><span class="ui-icon ui-icon-arrowrefresh-1-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrowrefresh-1-s"><span class="ui-icon ui-icon-arrowrefresh-1-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-4"><span class="ui-icon ui-icon-arrow-4"></span></li>
		<li class="ui-state-default" title=".ui-icon-arrow-4-diag"><span class="ui-icon ui-icon-arrow-4-diag"></span></li>

		<li class="ui-state-default" title=".ui-icon-extlink"><span class="ui-icon ui-icon-extlink"></span></li>
		<li class="ui-state-default" title=".ui-icon-newwin"><span class="ui-icon ui-icon-newwin"></span></li>
		<li class="ui-state-default" title=".ui-icon-refresh"><span class="ui-icon ui-icon-refresh"></span></li>
		<li class="ui-state-default" title=".ui-icon-shuffle"><span class="ui-icon ui-icon-shuffle"></span></li>
		<li class="ui-state-default" title=".ui-icon-transfer-e-w"><span class="ui-icon ui-icon-transfer-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-transferthick-e-w"><span class="ui-icon ui-icon-transferthick-e-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-folder-collapsed"><span class="ui-icon ui-icon-folder-collapsed"></span></li>
		<li class="ui-state-default" title=".ui-icon-folder-open"><span class="ui-icon ui-icon-folder-open"></span></li>
		<li class="ui-state-default" title=".ui-icon-document"><span class="ui-icon ui-icon-document"></span></li>

		<li class="ui-state-default" title=".ui-icon-document-b"><span class="ui-icon ui-icon-document-b"></span></li>
		<li class="ui-state-default" title=".ui-icon-note"><span class="ui-icon ui-icon-note"></span></li>
		<li class="ui-state-default" title=".ui-icon-mail-closed"><span class="ui-icon ui-icon-mail-closed"></span></li>
		<li class="ui-state-default" title=".ui-icon-mail-open"><span class="ui-icon ui-icon-mail-open"></span></li>
		<li class="ui-state-default" title=".ui-icon-suitcase"><span class="ui-icon ui-icon-suitcase"></span></li>
		<li class="ui-state-default" title=".ui-icon-comment"><span class="ui-icon ui-icon-comment"></span></li>
		<li class="ui-state-default" title=".ui-icon-person"><span class="ui-icon ui-icon-person"></span></li>
		<li class="ui-state-default" title=".ui-icon-print"><span class="ui-icon ui-icon-print"></span></li>
		<li class="ui-state-default" title=".ui-icon-trash"><span class="ui-icon ui-icon-trash"></span></li>

		<li class="ui-state-default" title=".ui-icon-locked"><span class="ui-icon ui-icon-locked"></span></li>
		<li class="ui-state-default" title=".ui-icon-unlocked"><span class="ui-icon ui-icon-unlocked"></span></li>
		<li class="ui-state-default" title=".ui-icon-bookmark"><span class="ui-icon ui-icon-bookmark"></span></li>
		<li class="ui-state-default" title=".ui-icon-tag"><span class="ui-icon ui-icon-tag"></span></li>
		<li class="ui-state-default" title=".ui-icon-home"><span class="ui-icon ui-icon-home"></span></li>
		<li class="ui-state-default" title=".ui-icon-flag"><span class="ui-icon ui-icon-flag"></span></li>
		<li class="ui-state-default" title=".ui-icon-calculator"><span class="ui-icon ui-icon-calculator"></span></li>
		<li class="ui-state-default" title=".ui-icon-cart"><span class="ui-icon ui-icon-cart"></span></li>
		<li class="ui-state-default" title=".ui-icon-pencil"><span class="ui-icon ui-icon-pencil"></span></li>

		<li class="ui-state-default" title=".ui-icon-clock"><span class="ui-icon ui-icon-clock"></span></li>
		<li class="ui-state-default" title=".ui-icon-disk"><span class="ui-icon ui-icon-disk"></span></li>
		<li class="ui-state-default" title=".ui-icon-calendar"><span class="ui-icon ui-icon-calendar"></span></li>
		<li class="ui-state-default" title=".ui-icon-zoomin"><span class="ui-icon ui-icon-zoomin"></span></li>
		<li class="ui-state-default" title=".ui-icon-zoomout"><span class="ui-icon ui-icon-zoomout"></span></li>
		<li class="ui-state-default" title=".ui-icon-search"><span class="ui-icon ui-icon-search"></span></li>
		<li class="ui-state-default" title=".ui-icon-wrench"><span class="ui-icon ui-icon-wrench"></span></li>
		<li class="ui-state-default" title=".ui-icon-gear"><span class="ui-icon ui-icon-gear"></span></li>
		<li class="ui-state-default" title=".ui-icon-heart"><span class="ui-icon ui-icon-heart"></span></li>

		<li class="ui-state-default" title=".ui-icon-star"><span class="ui-icon ui-icon-star"></span></li>
		<li class="ui-state-default" title=".ui-icon-link"><span class="ui-icon ui-icon-link"></span></li>
		<li class="ui-state-default" title=".ui-icon-cancel"><span class="ui-icon ui-icon-cancel"></span></li>
		<li class="ui-state-default" title=".ui-icon-plus"><span class="ui-icon ui-icon-plus"></span></li>
		<li class="ui-state-default" title=".ui-icon-plusthick"><span class="ui-icon ui-icon-plusthick"></span></li>
		<li class="ui-state-default" title=".ui-icon-minus"><span class="ui-icon ui-icon-minus"></span></li>
		<li class="ui-state-default" title=".ui-icon-minusthick"><span class="ui-icon ui-icon-minusthick"></span></li>
		<li class="ui-state-default" title=".ui-icon-close"><span class="ui-icon ui-icon-close"></span></li>
		<li class="ui-state-default" title=".ui-icon-closethick"><span class="ui-icon ui-icon-closethick"></span></li>

		<li class="ui-state-default" title=".ui-icon-key"><span class="ui-icon ui-icon-key"></span></li>
		<li class="ui-state-default" title=".ui-icon-lightbulb"><span class="ui-icon ui-icon-lightbulb"></span></li>
		<li class="ui-state-default" title=".ui-icon-scissors"><span class="ui-icon ui-icon-scissors"></span></li>
		<li class="ui-state-default" title=".ui-icon-clipboard"><span class="ui-icon ui-icon-clipboard"></span></li>
		<li class="ui-state-default" title=".ui-icon-copy"><span class="ui-icon ui-icon-copy"></span></li>
		<li class="ui-state-default" title=".ui-icon-contact"><span class="ui-icon ui-icon-contact"></span></li>
		<li class="ui-state-default" title=".ui-icon-image"><span class="ui-icon ui-icon-image"></span></li>
		<li class="ui-state-default" title=".ui-icon-video"><span class="ui-icon ui-icon-video"></span></li>
		<li class="ui-state-default" title=".ui-icon-script"><span class="ui-icon ui-icon-script"></span></li>
		<li class="ui-state-default" title=".ui-icon-alert"><span class="ui-icon ui-icon-alert"></span></li>

		<li class="ui-state-default" title=".ui-icon-info"><span class="ui-icon ui-icon-info"></span></li>
		<li class="ui-state-default" title=".ui-icon-notice"><span class="ui-icon ui-icon-notice"></span></li>
		<li class="ui-state-default" title=".ui-icon-help"><span class="ui-icon ui-icon-help"></span></li>
		<li class="ui-state-default" title=".ui-icon-check"><span class="ui-icon ui-icon-check"></span></li>
		<li class="ui-state-default" title=".ui-icon-bullet"><span class="ui-icon ui-icon-bullet"></span></li>
		<li class="ui-state-default" title=".ui-icon-radio-off"><span class="ui-icon ui-icon-radio-off"></span></li>
		<li class="ui-state-default" title=".ui-icon-radio-on"><span class="ui-icon ui-icon-radio-on"></span></li>
		<li class="ui-state-default" title=".ui-icon-pin-w"><span class="ui-icon ui-icon-pin-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-pin-s"><span class="ui-icon ui-icon-pin-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-play"><span class="ui-icon ui-icon-play"></span></li>
		<li class="ui-state-default" title=".ui-icon-pause"><span class="ui-icon ui-icon-pause"></span></li>

		<li class="ui-state-default" title=".ui-icon-seek-next"><span class="ui-icon ui-icon-seek-next"></span></li>
		<li class="ui-state-default" title=".ui-icon-seek-prev"><span class="ui-icon ui-icon-seek-prev"></span></li>
		<li class="ui-state-default" title=".ui-icon-seek-end"><span class="ui-icon ui-icon-seek-end"></span></li>
		<li class="ui-state-default" title=".ui-icon-seek-first"><span class="ui-icon ui-icon-seek-first"></span></li>
		<li class="ui-state-default" title=".ui-icon-stop"><span class="ui-icon ui-icon-stop"></span></li>
		<li class="ui-state-default" title=".ui-icon-eject"><span class="ui-icon ui-icon-eject"></span></li>
		<li class="ui-state-default" title=".ui-icon-volume-off"><span class="ui-icon ui-icon-volume-off"></span></li>
		<li class="ui-state-default" title=".ui-icon-volume-on"><span class="ui-icon ui-icon-volume-on"></span></li>
		<li class="ui-state-default" title=".ui-icon-power"><span class="ui-icon ui-icon-power"></span></li>

		<li class="ui-state-default" title=".ui-icon-signal-diag"><span class="ui-icon ui-icon-signal-diag"></span></li>
		<li class="ui-state-default" title=".ui-icon-signal"><span class="ui-icon ui-icon-signal"></span></li>
		<li class="ui-state-default" title=".ui-icon-battery-0"><span class="ui-icon ui-icon-battery-0"></span></li>
		<li class="ui-state-default" title=".ui-icon-battery-1"><span class="ui-icon ui-icon-battery-1"></span></li>
		<li class="ui-state-default" title=".ui-icon-battery-2"><span class="ui-icon ui-icon-battery-2"></span></li>
		<li class="ui-state-default" title=".ui-icon-battery-3"><span class="ui-icon ui-icon-battery-3"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-plus"><span class="ui-icon ui-icon-circle-plus"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-minus"><span class="ui-icon ui-icon-circle-minus"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-close"><span class="ui-icon ui-icon-circle-close"></span></li>

		<li class="ui-state-default" title=".ui-icon-circle-triangle-e"><span class="ui-icon ui-icon-circle-triangle-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-triangle-s"><span class="ui-icon ui-icon-circle-triangle-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-triangle-w"><span class="ui-icon ui-icon-circle-triangle-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-triangle-n"><span class="ui-icon ui-icon-circle-triangle-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-arrow-e"><span class="ui-icon ui-icon-circle-arrow-e"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-arrow-s"><span class="ui-icon ui-icon-circle-arrow-s"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-arrow-w"><span class="ui-icon ui-icon-circle-arrow-w"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-arrow-n"><span class="ui-icon ui-icon-circle-arrow-n"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-zoomin"><span class="ui-icon ui-icon-circle-zoomin"></span></li>

		<li class="ui-state-default" title=".ui-icon-circle-zoomout"><span class="ui-icon ui-icon-circle-zoomout"></span></li>
		<li class="ui-state-default" title=".ui-icon-circle-check"><span class="ui-icon ui-icon-circle-check"></span></li>
		<li class="ui-state-default" title=".ui-icon-circlesmall-plus"><span class="ui-icon ui-icon-circlesmall-plus"></span></li>
		<li class="ui-state-default" title=".ui-icon-circlesmall-minus"><span class="ui-icon ui-icon-circlesmall-minus"></span></li>
		<li class="ui-state-default" title=".ui-icon-circlesmall-close"><span class="ui-icon ui-icon-circlesmall-close"></span></li>
		<li class="ui-state-default" title=".ui-icon-squaresmall-plus"><span class="ui-icon ui-icon-squaresmall-plus"></span></li>
		<li class="ui-state-default" title=".ui-icon-squaresmall-minus"><span class="ui-icon ui-icon-squaresmall-minus"></span></li>
		<li class="ui-state-default" title=".ui-icon-squaresmall-close"><span class="ui-icon ui-icon-squaresmall-close"></span></li>
		<li class="ui-state-default" title=".ui-icon-grip-dotted-vertical"><span class="ui-icon ui-icon-grip-dotted-vertical"></span></li>

		<li class="ui-state-default" title=".ui-icon-grip-dotted-horizontal"><span class="ui-icon ui-icon-grip-dotted-horizontal"></span></li>
		<li class="ui-state-default" title=".ui-icon-grip-solid-vertical"><span class="ui-icon ui-icon-grip-solid-vertical"></span></li>
		<li class="ui-state-default" title=".ui-icon-grip-solid-horizontal"><span class="ui-icon ui-icon-grip-solid-horizontal"></span></li>
		<li class="ui-state-default" title=".ui-icon-gripsmall-diagonal-se"><span class="ui-icon ui-icon-gripsmall-diagonal-se"></span></li>
		<li class="ui-state-default" title=".ui-icon-grip-diagonal-se"><span class="ui-icon ui-icon-grip-diagonal-se"></span></li>
	</ul>
	<ul class="the-icons clear">
		<li><i class="icon-glass"></i> icon-glass</li>
		<li><i class="icon-music"></i> icon-music</li>
		<li><i class="icon-search"></i> icon-search</li>
		<li><i class="icon-envelope"></i> icon-envelope</li>
		<li><i class="icon-heart"></i> icon-heart</li>
		<li><i class="icon-star"></i> icon-star</li>
		<li><i class="icon-star-empty"></i> icon-star-empty</li>
		<li><i class="icon-user"></i> icon-user</li>
		<li><i class="icon-film"></i> icon-film</li>
		<li><i class="icon-th-large"></i> icon-th-large</li>
		<li><i class="icon-th"></i> icon-th</li>
		<li><i class="icon-th-list"></i> icon-th-list</li>
		<li><i class="icon-ok"></i> icon-ok</li>
		<li><i class="icon-remove"></i> icon-remove</li>
		<li><i class="icon-zoom-in"></i> icon-zoom-in</li>
		<li><i class="icon-zoom-out"></i> icon-zoom-out</li>
		<li><i class="icon-off"></i> icon-off</li>
		<li><i class="icon-signal"></i> icon-signal</li>
		<li><i class="icon-cog"></i> icon-cog</li>
		<li><i class="icon-trash"></i> icon-trash</li>
		<li><i class="icon-home"></i> icon-home</li>
		<li><i class="icon-file"></i> icon-file</li>
		<li><i class="icon-time"></i> icon-time</li>
		<li><i class="icon-road"></i> icon-road</li>
		<li><i class="icon-download-alt"></i> icon-download-alt</li>
		<li><i class="icon-download"></i> icon-download</li>
		<li><i class="icon-upload"></i> icon-upload</li>
		<li><i class="icon-inbox"></i> icon-inbox</li>

		<li><i class="icon-play-circle"></i> icon-play-circle</li>
		<li><i class="icon-repeat"></i> icon-repeat</li>
		<li><i class="icon-refresh"></i> icon-refresh</li>
		<li><i class="icon-list-alt"></i> icon-list-alt</li>
		<li><i class="icon-lock"></i> icon-lock</li>
		<li><i class="icon-flag"></i> icon-flag</li>
		<li><i class="icon-headphones"></i> icon-headphones</li>
		<li><i class="icon-volume-off"></i> icon-volume-off</li>
		<li><i class="icon-volume-down"></i> icon-volume-down</li>
		<li><i class="icon-volume-up"></i> icon-volume-up</li>
		<li><i class="icon-qrcode"></i> icon-qrcode</li>
		<li><i class="icon-barcode"></i> icon-barcode</li>
		<li><i class="icon-tag"></i> icon-tag</li>
		<li><i class="icon-tags"></i> icon-tags</li>
		<li><i class="icon-book"></i> icon-book</li>
		<li><i class="icon-bookmark"></i> icon-bookmark</li>
		<li><i class="icon-print"></i> icon-print</li>
		<li><i class="icon-camera"></i> icon-camera</li>
		<li><i class="icon-font"></i> icon-font</li>
		<li><i class="icon-bold"></i> icon-bold</li>
		<li><i class="icon-italic"></i> icon-italic</li>
		<li><i class="icon-text-height"></i> icon-text-height</li>
		<li><i class="icon-text-width"></i> icon-text-width</li>
		<li><i class="icon-align-left"></i> icon-align-left</li>
		<li><i class="icon-align-center"></i> icon-align-center</li>
		<li><i class="icon-align-right"></i> icon-align-right</li>
		<li><i class="icon-align-justify"></i> icon-align-justify</li>
		<li><i class="icon-list"></i> icon-list</li>

		<li><i class="icon-indent-left"></i> icon-indent-left</li>
		<li><i class="icon-indent-right"></i> icon-indent-right</li>
		<li><i class="icon-facetime-video"></i> icon-facetime-video</li>
		<li><i class="icon-picture"></i> icon-picture</li>
		<li><i class="icon-pencil"></i> icon-pencil</li>
		<li><i class="icon-map-marker"></i> icon-map-marker</li>
		<li><i class="icon-adjust"></i> icon-adjust</li>
		<li><i class="icon-tint"></i> icon-tint</li>
		<li><i class="icon-edit"></i> icon-edit</li>
		<li><i class="icon-share"></i> icon-share</li>
		<li><i class="icon-check"></i> icon-check</li>
		<li><i class="icon-move"></i> icon-move</li>
		<li><i class="icon-step-backward"></i> icon-step-backward</li>
		<li><i class="icon-fast-backward"></i> icon-fast-backward</li>
		<li><i class="icon-backward"></i> icon-backward</li>
		<li><i class="icon-play"></i> icon-play</li>
		<li><i class="icon-pause"></i> icon-pause</li>
		<li><i class="icon-stop"></i> icon-stop</li>
		<li><i class="icon-forward"></i> icon-forward</li>
		<li><i class="icon-fast-forward"></i> icon-fast-forward</li>
		<li><i class="icon-step-forward"></i> icon-step-forward</li>
		<li><i class="icon-eject"></i> icon-eject</li>
		<li><i class="icon-chevron-left"></i> icon-chevron-left</li>
		<li><i class="icon-chevron-right"></i> icon-chevron-right</li>
		<li><i class="icon-plus-sign"></i> icon-plus-sign</li>
		<li><i class="icon-minus-sign"></i> icon-minus-sign</li>
		<li><i class="icon-remove-sign"></i> icon-remove-sign</li>
		<li><i class="icon-ok-sign"></i> icon-ok-sign</li>

		<li><i class="icon-question-sign"></i> icon-question-sign</li>
		<li><i class="icon-info-sign"></i> icon-info-sign</li>
		<li><i class="icon-screenshot"></i> icon-screenshot</li>
		<li><i class="icon-remove-circle"></i> icon-remove-circle</li>
		<li><i class="icon-ok-circle"></i> icon-ok-circle</li>
		<li><i class="icon-ban-circle"></i> icon-ban-circle</li>
		<li><i class="icon-arrow-left"></i> icon-arrow-left</li>
		<li><i class="icon-arrow-right"></i> icon-arrow-right</li>
		<li><i class="icon-arrow-up"></i> icon-arrow-up</li>
		<li><i class="icon-arrow-down"></i> icon-arrow-down</li>
		<li><i class="icon-share-alt"></i> icon-share-alt</li>
		<li><i class="icon-resize-full"></i> icon-resize-full</li>
		<li><i class="icon-resize-small"></i> icon-resize-small</li>
		<li><i class="icon-plus"></i> icon-plus</li>
		<li><i class="icon-minus"></i> icon-minus</li>
		<li><i class="icon-asterisk"></i> icon-asterisk</li>
		<li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
		<li><i class="icon-gift"></i> icon-gift</li>
		<li><i class="icon-leaf"></i> icon-leaf</li>
		<li><i class="icon-fire"></i> icon-fire</li>
		<li><i class="icon-eye-open"></i> icon-eye-open</li>
		<li><i class="icon-eye-close"></i> icon-eye-close</li>
		<li><i class="icon-warning-sign"></i> icon-warning-sign</li>
		<li><i class="icon-plane"></i> icon-plane</li>
		<li><i class="icon-calendar"></i> icon-calendar</li>
		<li><i class="icon-random"></i> icon-random</li>
		<li><i class="icon-comment"></i> icon-comment</li>
		<li><i class="icon-magnet"></i> icon-magnet</li>

		<li><i class="icon-chevron-up"></i> icon-chevron-up</li>
		<li><i class="icon-chevron-down"></i> icon-chevron-down</li>
		<li><i class="icon-retweet"></i> icon-retweet</li>
		<li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
		<li><i class="icon-folder-close"></i> icon-folder-close</li>
		<li><i class="icon-folder-open"></i> icon-folder-open</li>
		<li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
		<li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
		<li><i class="icon-hdd"></i> icon-hdd</li>
		<li><i class="icon-bullhorn"></i> icon-bullhorn</li>
		<li><i class="icon-bell"></i> icon-bell</li>
		<li><i class="icon-certificate"></i> icon-certificate</li>
		<li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
		<li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
		<li><i class="icon-hand-right"></i> icon-hand-right</li>
		<li><i class="icon-hand-left"></i> icon-hand-left</li>
		<li><i class="icon-hand-up"></i> icon-hand-up</li>
		<li><i class="icon-hand-down"></i> icon-hand-down</li>
		<li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
		<li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
		<li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
		<li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
		<li><i class="icon-globe"></i> icon-globe</li>
		<li><i class="icon-wrench"></i> icon-wrench</li>
		<li><i class="icon-tasks"></i> icon-tasks</li>
		<li><i class="icon-filter"></i> icon-filter</li>
		<li><i class="icon-briefcase"></i> icon-briefcase</li>
		<li><i class="icon-fullscreen"></i> icon-fullscreen</li>
	</ul>
</div>
<pre class="brush: xml">
<h3>图标库</h3>
&lt;div class=&quot;ui-dropdown ui-dropdown-active&quot;&gt;
	&lt;div class=&quot;ui-dropdown-header&quot;&gt;
		&lt;a href=&quot;#&quot;&gt;请选择xxx&lt;/a&gt;
	&lt;/div&gt;
	&lt;div class=&quot;ui-dropdown-cnt&quot;&gt;
	&lt;/div&gt;
&lt;/div&gt; &lt;!-- .ui-dropdown --&gt;
</pre>
<div class="code"> 
	<div data-type="mhover" style="width:40px;">显示
		<div id="ui-show-2">内容</div>
	</div>
	<br />
	<br />
	<br />
	<div data-targ="#ui-show-1" data-type="mhover" style="width:40px;">显示
		<div id="ui-show-1">内容</div>
	</div>
</div>
<pre class="brush: xml">
<h3>通用的隐藏显示</h3>
&lt;div class=&quot;ui-dropdown ui-dropdown-active&quot;&gt;
	&lt;div class=&quot;ui-dropdown-header&quot;&gt;
		&lt;a href=&quot;#&quot;&gt;请选择xxx&lt;/a&gt;
	&lt;/div&gt;
	&lt;div class=&quot;ui-dropdown-cnt&quot;&gt;
	&lt;/div&gt;
&lt;/div&gt; &lt;!-- .ui-dropdown --&gt;
</pre>
<script>    
(function(){
    var pre = document.getElementsByTagName('pre'),
        h3 = document.getElementsByTagName('h3'),
        ol = document.getElementById('shortcut'),
        li = '',
        ilen = h3.length,
        jlen = pre.length,
        i, j;

    for(j=0; j < jlen; j++) {
        pre[j].style.display = 'block'
    }

    for(i=0; i < ilen; i++) {
        h3[i].id = 'list-' + (i + 1);
        link = 'list-' + i;
        li += '<li><a href="#' + link + '">' + h3[i].innerHTML + '</a></li>';
    }

    ol.innerHTML = li;
  
})();
</script>

</body>
</html>
