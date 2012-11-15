<?php $this->load->view('backend/_header') ?>
<link rel="stylesheet" href="css/template.css" />
<link rel="stylesheet" href="css/main.css" />
</head>
<body>
<?php include_once 'mod-header.php';?>
	<div id="content-box">
		<div id="toolbar-box">
			<div class="m">
				<div id="toolbar" class="toolbar-list">
					<ul>
						<li id="toolbar-new" class="button">
							<a class="toolbar" onclick="Cr.submitbutton('create');" href="javascript:;">
							<span class="icon-32-new">
							</span>
								新建
							</a>
						</li>
						<li id="toolbar-edit" class="button">
							<a class="toolbar" onclick="Cr.submitbutton('edit');"  href="javascript:;">
							<span class="icon-32-edit">
							</span>
								编辑
							</a>
						</li>
						<li id="icon-32-trash" class="button">
							<a class="toolbar" onclick="Cr.submitbutton('delete');" href="javascript:;">
							<span class="icon-32-trash">
							</span>
								回收站
							</a>
						</li>
						<li id="toolbar-publish" class="button">
							<a class="toolbar" onclick="Cr.submitbutton('publish');" href="javascript:;">
								<span class="icon-32-publish">
								</span>
							发布
							</a>
						</li>
						<li id="toolbar-publish" class="button">
							<a class="toolbar" onclick="Cr.submitbutton('unpublish');" href="javascript:;">
								<span class="icon-32-unpublish">
								</span>
							取消发布
							</a>
						</li>
						<li id="toolbar-featured" class="button">
							<a class="toolbar" onclick="Cr.submitbutton('hot');" href="javascript:;">
							<span class="icon-32-featured">
							</span>
								加精
							</a>
						</li>
						<li id="toolbar-cancel"  class="button">
							<a class="toolbar" onclick="Cr.submitbutton('home');" href="javascript:;">
								<span class="icon-32-cancel">
								</span>
								关闭
							</a>
						</li>
						<li id="toolbar-help" class="button">
								<a class="toolbar" onclick="Cr.submitbutton('help');" href="javascript:;">
								<span class="icon-32-help">
								</span>
								帮助
							</a>
						</li>
					</ul>
					<div class="clr"></div>
				</div>
				<div class="pagetitle icon-48-article"><h2>新闻管理：新闻列表</h2></div>
			</div>
		</div>
		<div id="submenu-box">
			<div class="m clearfix">
				<ul id="submenu">
					<li>
						<a href="#">新闻首页管理</a>	
					</li>
					<li>
						<a href="#">新闻类别管理</a>	
					</li>
					<li>
						<a href="#">新闻采集管理</a>	
					</li>
				</ul>
			</div>
		</div>
		<div id="element-box" class="element-box" >
			<div class="m clearfix"> 
				<? $attributes = array('class' => 'action-form', 'id' => 'action')?>
				<?=form_open($this->config->base_url().'index.php/news/action',$attributes) ?>
				<fieldset id="filter-bar" class="clearfix"> 
					<div class="filter-search fltlft">
						<label class="filter-search-lbl"><strong>筛选条件：</strong></label>
						<label class="filter-search-lbl">关键字：</label>
						<input type="text" title="搜索标题或别名。 ID为前缀：搜索文章ID。" value="" name="filter_title">
						<label class="filter-search-lbl">编辑人：</label>
						<input type="text" title="输入编辑人名" value="" name="filter_editor">
						每页
						<input type="text" style="width:20px;" name="filter_page" id="filter_page"/>
						条
						<button class="btn" id="filter-find" type="submit">筛选</button>
						<button type="button">清除</button>
					</div>
					<div class="filter-select fltrt">
						<label for="filter_search" class="filter-search-lbl">类型：</label>
						<select class="inputbox" >
							<option value="">- 选择状态 -</option>
							<option value="1">发布</option>
							<option value="0">未发布</option>
							<option value="2">已存档</option>
							<option value="-2">已转入回收站</option>
							<option value="*">所有</option>
						</select>
					</div>
				</fieldset>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="center">
								<input type="checkbox" name="chkall" onclick="Cr.chkall()" class="checkbox">
							</th>
							<th>ID</th>
							<th>文章标题</th>
							<th>录入时间</th>
							<th>类目</th>
							<th>是否发布</th>
							<th>点击率</th>
							<th>编辑人</th>
						</tr>
					</thead>
					<tbody>
						<? foreach ($news as $news_item): ?>
							<tr>
							  <td class="center">
								<input type="checkbox" class="checkbox" name="checked" value="<?=$news_item['news_id'] ?>">
							  </td>
							  <td>
								<?=$news_item['news_id'] ?>
							  </td>
							  <td>
								  <a href="#" target="_blank">
									<?=$news_item['title'] ?>
								  </a>
							  </td>
							  <td><?=$news_item['add_time']?></td>
							  <td><?=$news_item['cate_name']?></td>
							  <td><?=$this->noya->temp($news_item['ifcheck']>0)?></td>
							  <td><?=$news_item['total_view']?></td>
							  <td><?=$news_item['author']?></td>
							</tr>
						<? endforeach; ?>	
					</tbody>
				</table>
				<div> 
					<input type="hidden" value="" id="boxChecked" name="boxChecked"/>
					<input type="hidden" value="" id="btnAction" name="btnAction"/>
				</div>
				<?=form_close() ?>
				<? $attributes = array('class' => 'page-form', 'id' => 'page-form')?>
				<?=form_open($this->uri->uri_string(),$attributes) ?>
				<div class="pagination">
					<div class="fr">
							<div class="limit">每页显示
								<select size="1" class="inputbox" name="limit" id="limit">
									<option value="5">5</option>
									<option value="10">10</option>
									<option value="15">15</option>
									<option value="20">20</option>
									<option value="25">25</option>
									<option value="30">30</option>
									<option value="50">50</option>
									<option value="100">100</option>
									<option value="0">所有</option>
								</select>
							</div>
							<div class="button2-right">
								<div class="start">
								<a href="#">首页</a>
								</div>
							</div>
							<div class="button2-right">
								<div class="prev"><a href="#">上一页</a>
								</div>
							</div>
							<div class="button2-left">
								<div class="page"><span>1</span><a title="2" href="#">2</a>
								</div>
							</div>
							<div class="button2-left">
								<div class="next">
									<a title="下一页" href="#">下一页</a>
								</div>
							</div>
							<div class="button2-left">
								<div class="end">
									<a title="末页" href="#">末页</a>
								</div>
							</div>
							<div class="limit">第1页 共2页</div>
							<input type="hidden" value="0" name="limitstart">
					</div>
				</div>
				<?=form_close() ?>
			</div>
		</div>
	</div>
	<script type="text/javascript"> 
		In.add('cookie',{path:'js/cookie.js',type:'js',charset:'utf-8'});
		function ajaxitems(){
			$.ajax({
			  url: "",
			  context: document.body
			}).done(function() { 
			  $(this).addClass("done");
			});
		}
		In.ready('cookie',function(){
			//隐藏域值改变
			var cook=$.cookie('c_page')?$.cookie('c_page'):20;
			$(".limit").find('option[value|='+cook+']').attr("selected",true);	//select框保存状态
			//分页
			$('#limit').bind('change',function(){
				var sel_text=$(this).find("option:selected").text();
				$.cookie('c_page', sel_text);
				location.replace(location.href);
			});
			//筛选
			$('#filter-find').click(function(){
				$.cookie('c_page', $('#filter_page').val());
				Cr.submitbutton('search');
			});
			//分页ajax
			
		});
	</script>
<?php $this->load->view('backend/_footer') ?>