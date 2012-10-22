<div id="border-top" class="h_blue">
	<span class="title"><a href="index.php">系统管理</a></span>
</div>
<div id="header-box">
	<div id="module-status">
		<span class="loggedin-users">无用户登录前台</span>
		<span class="backloggedin-users">1位管理员登录后台</span>
		<span class="no-unread-messages"><a href="#">无消息</a></span>
		<span class="viewsite"><a target="_blank" href="#">浏览网站前台</a></span>
		<span class="logout"><a href="#">退出</a></span>		
	</div>
	<div id="module-menu">
		<ul id="menu">
			<li class="node"><a href="#">网站</a>
				<ul>
					<li><a href="#" class="icon-16-cpanel">控制面板</a></li>
					<li class="separator"><span></span></li>
					<li><a href="#" class="icon-16-profile">我的资料</a></li>
					<li class="separator"><span></span></li>
					<li><a href="#" class="icon-16-config">全局配置</a></li>
					<li class="separator"><span></span></li>
					<li class="node"><a href="#" class="icon-16-maintenance">网站维护</a>
						<ul class="menu-component" id="menu-com-checkin">
							<li><a href="#" class="icon-16-checkin">全体结束工作</a></li>
							<li class="separator"><span></span></li>
							<li><a href="#" class="icon-16-clear">清除缓存</a></li>
							<li><a href="#" class="icon-16-purge">清除过期缓存</a></li>
						</ul>
					</li>
					<li class="separator"><span></span></li>
					<li><a href="#" class="icon-16-info">系统信息</a></li>
					<li class="separator"><span></span></li>
					<li><a href="#" class="icon-16-logout">退出</a></li>
				</ul>
			</li>
			<li class="node"><a href="#">用户</a>
				<ul>
					<li class="node"><a href="#" class="icon-16-profile">用户信息管理</a>
						<ul class="menu-component" id="menu-com-checkin">
							<li><a href="#" class="icon-16-newarticle">新增用户</a></li>
							<li class="separator"><span></span></li>
						</ul>
					</li>
					<li class="node"><a href="#" class="icon-16-groups">会员统计</a>
						<ul class="menu-component" id="menu-com-checkin">
							<li><a href="#" class="icon-16-levels">按日统计</a></li>
							<li class="separator"><span></span></li>
							<li><a href="#" class="icon-16-levels">按周统计</a></li>
							<li class="separator"><span></span></li>
							<li><a href="#" class="icon-16-levels">按月统计</a></li>
							<li class="separator"><span></span></li>
							<li><a href="#" class="icon-16-levels">按年统计</a></li>
							<li class="separator"><span></span></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="node"><a href="#">资讯</a>
				<ul>
					<li class="node"><a href="<?=$this->config->base_url().'index.php/news'?>" class="icon-16-profile">新闻管理</a>
						<ul class="menu-component" id="menu-com-checkin">
							<li><a href="#" class="icon-16-newarticle">新增新闻</a></li>
							<li class="separator"><span></span></li>
							<li><a href="#" class="icon-16-newarticle">类别管理</a></li>
							<li class="separator"><span></span></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>	
	</div>
	<div class="clr"></div>
</div>