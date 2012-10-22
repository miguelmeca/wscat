<?php $this->load->view('backend/_header') ?>
<link rel="stylesheet" href="css/template.css" />
<link rel="stylesheet" href="css/main.css" />
</head>
<body>
<?php $this->load->view('backend/mod-header') ?>
	<div id="content-box">
		<div id="element-box"> 
			<div id="system-message-container"></div>
			<div class="m"> 
				<div class="adminform"> 
					<div class="cpanel-left"> 
						<div class="cpanel"> 
							<div class="icon-wrapper">
								<div class="icon">
									<a href="#"><img alt="" src="images/header/icon-48-user.png">
										<span>用户管理</span>
									</a>
								</div>
							</div>		
							<div class="icon-wrapper">
								<div class="icon">
									<a href="#"><img alt="" src="images/header/icon-48-menumgr.png">
										<span>菜单管理</span>
									</a>
								</div>
							</div>
							<div class="icon-wrapper">
								<div class="icon">
									<a href="#"><img alt="" src="images/header/icon-48-module.png">
										<span>模块管理</span>
									</a>
								</div>
							</div>	
							<div class="icon-wrapper">
								<div class="icon">
									<a href="#"><img alt="" src="images/header/icon-48-extension.png">
										<span>扩展管理</span>
									</a>
								</div>
							</div>
							<div class="icon-wrapper">
								<div class="icon">
									<a href="#"><img alt="" src="images/header/icon-48-user-profile.png">
										<span>个人资料编辑</span>
									</a>
								</div>
							</div>	
							<div class="icon-wrapper">
								<div class="icon">
									<a href="#"><img alt="" src="images/header/icon-48-config.png">
										<span>全局配置</span>
									</a>
								</div>
							</div>		
						</div>
					</div>
					<div class="cpanel-right"> 
						<div class="pane-sliders">
							<div class="panel">
								<h3 id="cpanel-panel-logged" class="title pane-toggler">
									<a href="javascript:void(0);"><span>系统信息</span></a>
								</h3>
								<div class="pane-slider content">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th style="width:25%">
													操作系统
												</th>
												<th style="width:75%">
													<?=$system?>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr> 
												<td> 
													服务器信息
												</td>
												<td> 
													<?=$server?>
												</td>
											</tr>
											<tr>
											  <td>WEB服务器版本</td>
											  <td><?=$web?></td>
											</tr>
											<tr>
											  <td>PHP安全模式</td>
											  <td><?=$safe?></td>
											</tr>
											<tr>
											  <td class="item1">MySQL版本</td>
											  <td class="item2"><?=$mysql?></td>
											</tr>
											<tr>
											  <td>脚本运行可占最大内存</td>
											  <td><?=$cfg_var?></td>
											</tr>
											<tr>
											  <td class="item1">POST方法提交限制</td>
											  <td class="item2"><?=$cfg_max_size?></td>
											</tr>
											<tr>
											  <td class="item1">脚本超时时间 </td>
											  <td class="item2"><?=$max_execution_time?></td>
											</tr>
											<tr>
											  <td class="item1">最大上传限制</td>
											  <td class="item2"><?=$max_file_size?></td>
											</tr>
											<tr>
											  <td class="item1">允许打开远程文件 </td>
											  <td class="item2"><?=$allow_url_fopen?></td>
											</tr>
											<tr>
											  <td class="item1">服务器剩余空间 </td>
											  <td class="item2"><?=$disk_size?></td>
											</tr>
											<tr>
											  <td class="item1">当前数据库大小 </td>
											  <td class="item2"><?=$content_datasize?></td>
											</tr>
											<tr>
											  <td class="item1">图像GD库支持 </td>
											  <td class="item2"><?=$GD?></td>
											</tr>
											<tr>
											  <td class="item1">Session支持 </td>
											  <td class="item2"><?=$allow_session?></td>
											</tr>
											<tr>
											  <td class="item1">当前域名 </td>
											  <td class="item2"><?=$host_name?></td>
											</tr>
											<tr>
											  <td class="item1">服务器IP </td>
											  <td class="item2"><?=$host_address?></td>
											</tr>
											<tr>
											  <td class="item1">服务器当前时间 </td>
											  <td class="item2"><?=$host_data?></td>
											</tr>
											<tr>
											  <td class="item1">当前访问IP </td>
											  <td class="item2"><?=$memeber_ip?></td>
											</tr>
											<tr>
											  <td class="item1">被屏蔽的函数 </td>
											  <td class="item2"><?=$disable_funcs?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="clr"></div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('backend/_footer') ?>