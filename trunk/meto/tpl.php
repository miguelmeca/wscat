<?php 
include "lessc.inc.php";
$less = new lessc('less/tpl.less');
file_put_contents('css/tpl.css', $less->parse());
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
<link rel="stylesheet" href="css/tpl.css" />
<script type="text/javascript" src="js/jquery.js"></script>
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
	<ul class="ui-list ui-list-lines clear">
		<li class="ui-list-item"><a href="1.html">新闻第一条</a></li>
		<li class="ui-list-item"><a href="2.html">新闻第一条b</a></li>
		<li class="ui-list-item"><a href="3.html">新闻第一条c</a></li>
	</ul>
	<h3>一般列表纵向</h3>
	<ul class="ui-list clear">
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
		<li class="ui-nav-item">
			<a href="#">导航</a>
			<ul class="ui-nav-item-child">
				<li>item</li>
				<li>item</li>
				<li>item</li>
			</ul>
		</li>
		<li class="ui-nav-item ui-nav-item-current">
			<a href="#">导航</a>
			<ul class="ui-nav-item-child">
				<li>item</li>
				<li>item</li>
				<li>item</li>
			</ul>
		</li>
		<li class="ui-nav-item">
			<a href="#">导航</a>
			<ul class="ui-nav-item-child">
				<li>item</li>
				<li>item</li>
				<li>item</li>
			</ul>
		</li>
		<li class="ui-nav-item">
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
	<h3>标题(.ui-title)</h3>
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
<h3>步骤(.ui-step)</h3>	
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

<pre class="brush: xml">
<h3>按钮(.ui-button)</h3>
&lt;a class=&quot;ui-button ui-button-disabled&quot;&gt;&lt;span class=&quot;ui-button-text&quot;&gt;文字&lt;/span&gt;&lt;/a&gt;
&lt;a class=&quot;ui-button ui-button-round&quot;&gt;&lt;span class=&quot;ui-button-text&quot;&gt;文字&lt;/span&gt;&lt;/a&gt;
&lt;a class=&quot;ui-button ui-button-icon-left&quot;&gt;&lt;span class=&quot;ui-icon ui-icon-rarr&quot;&gt;&rarr;&lt;/span&gt;&lt;span class=&quot;ui-button-text&quot;&gt;文字&lt;/span&gt;&lt;/a&gt;
</pre>


<pre class="brush: xml">
<h3>表单项(.ui-input[label])</h3>
&lt;label class=&quot;ui-label&quot; for=""&gt;&lt;input id=&quot;&quot; class=&quot;ui-input ui-input-hover&quot; type=&quot;text&quot; /&gt;&lt;label&gt;

&lt;textarea class=&quot;ui-textarea&quot;&gt;&lt;/textarea&gt;
</pre>

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

<pre class="brush: xml">
<h3>提示信息(.ui-message)</h3>
&lt;div class="ui-message"&gt;
	&lt;span class="ui-icon ui-icon-uarr"&gt;&uarr;&lt;/span&gt;
	
	&lt;div class="ui-message-cnt ui-message-cnt-success"&gt;
		&lt;span class="ui-icon ui-icon-rarr"&gt;&rarr;&lt;/span&gt;
		&lt;div class="ui-message-text"&gt;內容內網&lt;/div&gt;
	&lt;/div&gt;
	
	&lt;span class="ui-icon ui-icon-darr"&gt;&darr;&lt;/span&gt;
&lt;/div&gt; &lt;!-- .ui-message --&gt;
</pre>

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

<pre class="brush: xml">
<h3>浮层信息(.ui-tip)</h3>
&lt;div class=&quot;ui-tip&quot;&gt;
	&lt;div class=&quot;ui-tip-cnt&quot;&gt;
		我是提示内容
	&lt;/div&gt;
	&lt;span class=&quot;ui-icon ui-icon-uarr&quot;&gt;&uarr;&lt;/span&gt;
&lt;/div&gt; &lt;!-- .ui-tip --&gt;
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
