<?php /* Smarty version Smarty-3.1.7, created on 2013-10-11 09:50:30
         compiled from "application\modules\admin\views\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2818352564db12830e1-05751103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b513733275990d1e38dc5cd62799065886995ca6' => 
    array (
      0 => 'application\\modules\\admin\\views\\dashboard.tpl',
      1 => 1381485028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2818352564db12830e1-05751103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52564db12c577',
  'variables' => 
  array (
    'baseUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52564db12c577')) {function content_52564db12c577($_smarty_tpl) {?><div id="content" class="span10">
			<!-- start: Content -->
			
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
				<hr>
			</div>
			
			<div class="row-fluid">
				
				
				<div class="circleStats">
                    
					
					<div class="offset2" "span2" onTablet="span4" onDesktop="span2">
						<div class="circleStatsItem yellow">
                        	<i class="fa-icon-user"></i>
							<span class="plus">+</span>
							<span class="percent">%</span>
                        	<input type="text" value="12" class="yellowCircle" />
                    	</div>
						<div class="box-small-title">New users</div>
					</div>
					
                    <div class="noMargin span2" onTablet="span4" onDesktop="span2">
						<div class="circleStatsItem pink">
                        	<i class="fa-icon-globe"></i>
							<span class="plus">+</span>
							<span class="percent">%</span>
                        	<input type="text" value="23" class="pinkCircle" />
                    	</div>
						<div class="box-small-title">Visits</div>
					</div>
					
                    <div class="span2" onTablet="span4" onDesktop="span2">
                    	<div class="circleStatsItem green">
                        	<i class="fa-icon-bar-chart"></i>
							<span class="plus">+</span>
							<span class="percent">%</span>
                        	<input type="text" value="34" class="greenCircle" />
                    	</div>
						<div class="box-small-title">Income</div>
					</div>
					
                    <div class="span2" onTablet="span4" onDesktop="span2">
						<div class="circleStatsItem lightorange">
                        	<i class="fa-icon-shopping-cart"></i>
							<span class="plus" pull>+</span>
							<span class="percent">%</span>
                        	<input type="text" value="42" class="lightOrangeCircle" />
                    	</div>
						<div class="box-small-title">Sales</div>
					</div>
                 </div>
               </div>
			
			<hr>
			
			<div class="row-fluid">
				
				<div class="box span8" onTablet="span12" onDesktop="span8">
					<div class="box-header">
						<h2><i class="icon-signal"></i><span class="break"></span>Site Statistics</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div id="stats-chart"  class="center" style="height:300px" ></div>
					</div>
				</div>
				
				<div class="box span4 noMargin" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="icon-list"></i><span class="break"></span>Weekly Stat</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="sparkLineStats">

	                        <ul class="unstyled">
	                            <li>
									<span class="sparkLineStats1 "></span> 
									Visits: 
									<span class="number">356</span>
								</li>
	                            <li>
	                                <span class="sparkLineStats2"></span>
	                                Unique Visitors: 
	                                <span class="number">252</span>
	                            </li>
	                            <li><span class="sparkLineStats3"></span> 
	                                Pageviews: 
	                                <span class="number">781</span>
	                            </li>
	                            <li><span class="sparkLineStats4"></span>
	                                Pages / Visit: 
	                                <span class="number">2,19</span>
	                            </li>
	                            <li><span class="sparkLineStats5"></span>
	                                Avg. Visit Duration: 
	                                <span class="number">00:02:58</span>
	                            </li>
	                            <li><span class="sparkLineStats6"></span>
	                                Bounce Rate: <span class="number">59,83%</span>
	                            </li>
	                            <li><span class="sparkLineStats7"></span>
	                                % New Visits: 
	                                <span class="number">70,79%</span>
	                            </li>
	                            <li><span class="sparkLineStats8"></span>
	                                % Returning Visitor: 
	                                <span class="number">29,21%</span>
	                            </li>

	                        </ul>
	
	                    </div><!-- End .sparkStats -->
					</div>
				</div><!--/span-->
				
			</div>
			
			<hr>
			
			<div class="sortable row-fluid">
				
				<a class="quick-button span2">
					<i class="fa-icon-group"></i>
					<p>Users</p>
					<span class="notification">1.367</span>
				</a>
				<a class="quick-button span2">
					<i class="fa-icon-comments-alt"></i>
					<p>Comments</p>
					<span class="notification green">167</span>
				</a>
				<a class="quick-button span2">
					<i class="fa-icon-shopping-cart"></i>
					<p>Orders</p>
				</a>
				<a class="quick-button span2">
					<i class="fa-icon-barcode"></i>
					<p>Products</p>
				</a>
				<a class="quick-button span2">
					<i class="fa-icon-envelope"></i>
					<p>Messages</p>
				</a>
				<a class="quick-button span2">
					<i class="fa-icon-calendar"></i>
					<p>Calendar</p>
					<span class="notification red">68</span>
				</a>
				
			</div>
			
			<hr>
			
			<div class="row-fluid">
				
				<div class="box span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="icon-fire"></i><span class="break"></span>Server Load</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						 <div id="serverload" style="height:235px;"></div>
					</div>
				</div>
				
				<div class="box span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="icon-tasks"></i><span class="break"></span>Tasks in Progress</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="progressBarValue">
							<span>iOS App Development</span> <span class="progressCustomValueVal">20</span>
							<div class="progressSlim progressCustomValue progressRed"></div>
						</div>
						<div class="progressBarValue">
							<span>Android App Development</span> <span class="progressCustomValueVal">40</span>
							<div class="progressSlim progressCustomValue progressOrange"></div>
						</div>
						<div class="progressBarValue">
							<span>A/B Tests</span> <span class="progressCustomValueVal">60</span>
							<div class="progressSlim progressCustomValue progressYellow"></div>
						</div>
						<div class="progressBarValue">
							<span>Server Load Tests</span> <span class="progressCustomValueVal">80</span>
							<div class="progressSlim progressCustomValue progressGreen"></div>
						</div>
						<div class="progressBarValue">
							<span>Django Backend Development</span> <span class="progressCustomValueVal">100</span>
							<div class="progressSlim progressCustomValue progressBlue"></div>
						</div>
					</div>
				</div>
				
				<div class="box span4 noMargin" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="icon-check"></i><span class="break"></span>To Do List</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="todo">
							<ul class="todo-list">
								<li>
									Windows Phone 8 App <span class="label label-important">today</span>
														<span class="todo-actions">
															<a href="#"><i class="icon-ok"></i></a>
															<a href="#" class="todo-remove"><i class="icon-remove"></i></a>
														</span>
								</li>
								<li>New frontend layout <span class="label label-important">today</span>
													<span class="todo-actions">
														<a href="#"><i class="icon-ok"></i></a>
														<a href="#" class="todo-remove"><i class="icon-remove"></i></a>
													</span>
								</li>
								<li>Hire developers <span class="label label-warning">tommorow</span>
													<span class="todo-actions">
														<a href="#"><i class="icon-ok"></i></a>
														<a href="#" class="todo-remove"><i class="icon-remove"></i></a>
													</span>
								</li>
								<li>Windows Phone 8 App <span class="label label-warning">tommorow</span>
													<span class="todo-actions">
														<a href="#"><i class="icon-ok"></i></a>
														<a href="#" class="todo-remove"><i class="icon-remove"></i></a>
													</span>
								</li>
								<li>New frontend layout <span class="label label-success">this week</span>
													<span class="todo-actions">
														<a href="#"><i class="icon-ok"></i></a>
														<a href="#" class="todo-remove"><i class="icon-remove"></i></a>
													</span>
								</li>
								<li>Hire developers <span class="label label-success">this week</span>
													<span class="todo-actions">
														<a href="#"><i class="icon-ok"></i></a>
														<a href="#" class="todo-remove"><i class="icon-remove"></i></a>
													</span>
								</li>
								<li>New frontend layout <span class="label label-info">this month</span>
													<span class="todo-actions">
														<a href="#"><i class="icon-ok"></i></a>
														<a href="#" class="todo-remove"><i class="icon-remove"></i></a>
													</span>
								</li>
								<li>Hire developers <span class="label label-info">this month</span>
													<span class="todo-actions">
														<a href="#"><i class="icon-ok"></i></a>
														<a href="#" class="todo-remove"><i class="icon-remove"></i></a>
													</span>
								</li>
							</ul>
						</div>	
					</div>
				</div>
			
			</div>
			
			<hr>
			
			<div class="row-fluid">
				
				<a class="quick-button-small span1">
					<i class="fa-icon-group"></i>
					<p>Users</p>
					<span class="notification">7</span>
				</a>
				<a class="quick-button-small span1">
					<i class="fa-icon-comments-alt"></i>
					<p>Comments</p>
					<span class="notification green">4</span>
				</a>
				<a class="quick-button-small span1">
					<i class="fa-icon-shopping-cart"></i>
					<p>Orders</p>
				</a>
				<a class="quick-button-small span1">
					<i class="fa-icon-barcode"></i>
					<p>Products</p>
				</a>
				<a class="quick-button-small span1">
					<i class="fa-icon-envelope"></i>
					<p>Messages</p>
				</a>
				<a class="quick-button-small span1">
					<i class="fa-icon-calendar"></i>
					<p>Calendar</p>
					<span class="notification red">8</span>
				</a>
				
				<a class="quick-button-small span1 noMargin">
					<i class="fa-icon-beaker"></i>
					<p>Projects</p>
				</a>
				<a class="quick-button-small span1">
					<i class="fa-icon-thumbs-up"></i>
					<p>Likes</p>
					<span class="notification green">+ 11</span>
				</a>
				<a class="quick-button-small span1">
					<i class="fa-icon-heart-empty"></i>
					<p>Favorites</p>
				</a>
				<a class="quick-button-small span1">
					<i class="fa-icon-bullhorn"></i>
					<p>Notifications</p>
					<span class="notification yellow">7</span>
				</a>
				<a class="quick-button-small span1">
					<i class="fa-icon-cogs"></i>
					<p>Settings</p>
				</a>
				<a class="quick-button-small span1">
					<i class="fa-icon-dashboard"></i>
					<p>Dashboard</p>
				</a>
				
			</div>	
			
			<hr>
			
			<div class="row-fluid">
				
				<div class="box span8" onTablet="span12" onDesktop="span8">
					<div class="box-header">
						<h2><i class="icon-calendar"></i><span class="break"></span>Calendar</h2>
					</div>
					<div class="box-content">
						<div id="main_calendar" class="hidden-phone"></div>
						<div id="main_calendar_phone" class="hidden-desktop hidden-tablet"></div>
						<div class="clearfix"></div>
					</div>	
				</div><!--/span-->
				
				<div class="box span4 noMargin" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="icon-list"></i><span class="break"></span>Support tickets</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="tickets">
							<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">Server unavaible</span>
										<span class="number">[ #199278 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar6.jpg" alt="Avatar"></span>
										<span class="name">Ashley Tan</span>
										<span class="priority blue">[ Low priority ]</span>
										<span class="status">Status: <span class="green">[ Complete ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						  	<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">Mobile App Problem</span>
										<span class="number">[ #199277 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar7.jpg" alt="Avatar"></span>
										<span class="name">Ann Kovalsky</span>
										<span class="priority yellow">[ Normal priority ]</span>
										<span class="status">Status: <span class="yellow">[ Pending ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">PayPal issue</span>
										<span class="number">[ #199276 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar8.jpg" alt="Avatar"></span>
										<span class="name">Chris Dan</span>
										<span class="priority red">[ High priority ]</span>
										<span class="status">Status: <span class="blue">[ In progress ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">IE7 problem</span>
										<span class="number">[ #199275 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar9.jpg" alt="Avatar"></span>
										<span class="name">John Grand</span>
										<span class="priority blue">[ Low priority ]</span>
										<span class="status">Status: <span class="red">[ Rejected ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">Server unavaible</span>
										<span class="number">[ #199274 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar2.jpg" alt="Avatar"></span>
										<span class="name">Agnes Young</span>
										<span class="priority blue">[ Low priority ]</span>
										<span class="status">Status: <span class="green">[ Complete ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						  	<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">Mobile App Problem</span>
										<span class="number">[ #199273 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar3.jpg" alt="Avatar"></span>
										<span class="name">Melanie Brown</span>
										<span class="priority yellow">[ Normal priority ]</span>
										<span class="status">Status: <span class="yellow">[ Pending ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
							<li class="ticket">
								<a href="#">
									<span class="header">
										<span class="title">PayPal issue</span>
										<span class="number">[ #199272 ]</span>
									</span>	
									<span class="content">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar4.jpg" alt="Avatar"></span>
										<span class="name">Patricia Doyle</span>
										<span class="priority red">[ High priority ]</span>
										<span class="status">Status: <span class="blue">[ In progress ]</span></span>
										<span class="date">Jul 25, 2012 11:09</span>
									</span>	                                                        
								</a>
							</li>
						</ul>
					</div>
				</div><!--/span-->
			
			</div>
				
			<hr>

			<div class="row-fluid">	
				
				<div class="box span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="icon-list"></i><span class="break"></span>Weekly Stat</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list">
							<li>
								<a href="#">
									<i class="fa-icon-arrow-up green"></i>                               
									<span class="green">92</span>
									New Comments                                    
								</a>
							</li>
						  <li>
							<a href="#">
							  <i class="fa-icon-arrow-down red"></i>
							  <span class="red">15</span>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa-icon-minus blue"></i>
							  <span class="blue">36</span>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa-icon-comment yellow"></i>
							  <span class="yellow">45</span>
							  User reviews                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa-icon-arrow-up green"></i>                               
							  <span class="green">112</span>
							  New Comments                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa-icon-arrow-down red"></i>
							  <span class="red">31</span>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa-icon-minus blue"></i>
							  <span class="blue">93</span>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="fa-icon-comment yellow"></i>
							  <span class="yellow">254</span>
							  User reviews                                    
							</a>
						  </li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="icon-user"></i><span class="break"></span>Last Users</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list">
							<li>
								<a href="#">
									<img class="avatar" alt="Lucas" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar.jpg">
								</a>
								<strong>Name:</strong> <a href="#">Å�ukasz Holeczek</a><br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> <span class="label label-success">Approved</span>                                  
							</li>
							<li>
								<a href="#">
									<img class="avatar" alt="Bill" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar9.jpg">
								</a>
								<strong>Name:</strong> <a href="#">Bill Cole</a><br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> <span class="label label-warning">Pending</span>                                 
							</li>
							<li>
								<a href="#">
									<img class="avatar" alt="Jane" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar5.jpg">
								</a>
								<strong>Name:</strong> <a href="#">Jane Sanchez</a><br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> <span class="label label-important">Banned</span>                                  
							</li>
							<li>
								<a href="#">
									<img class="avatar" alt="Kate" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar6.jpg">
								</a>
								<strong>Name:</strong> <a href="#">Kate Presley</a><br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> <span class="label label-info">Updates</span>                                  
							</li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box span4 noMargin" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="icon-comment"></i><span class="break"></span>Chats</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="chat">
							<li class="left">
								<img class="avatar" alt="Lucas" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Å�ukasz Holeczek</span>
									<span class="time">Jul 25, 2012 11:09</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
							<li class="right">
								<img class="avatar" alt="Lucas" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Å�ukasz Holeczek</span>
									<span class="time">Jul 25, 2012 11:08</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>                                  
							</li>
							<li class="left">
								<img class="avatar" alt="Lucas" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Å�ukasz Holeczek</span>
									<span class="time">Jul 25, 2012 11:07</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
							<li class="right">
								<img class="avatar" alt="Lucas" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar.jpg">
								<span class="message"><span class="arrow"></span>
									<span class="from">Å�ukasz Holeczek</span>
									<span class="time">Jul 25, 2012 11:06</span>
									<span class="text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</span>
								</span>	                                  
							</li>
						</ul>
						<div class="chat-form">
							<textarea></textarea>
							<button class="btn btn-info">Send message</button>
						</div>	
					</div>
				</div><!--/span-->
						
			</div>
			         
                    <hr>
			<!-- end: Content -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">Ã—</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<?php }} ?>