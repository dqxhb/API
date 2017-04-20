<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php if ( is_home() ) {
				bloginfo('name'); echo " - "; bloginfo('description');
			} elseif ( is_category() ) {
				single_cat_title(); echo " - "; bloginfo('name');
			} elseif (is_single() || is_page() ) {
				single_post_title();
			} elseif (is_search() ) {
				echo "搜索结果"; echo " - "; bloginfo('name');
			} elseif (is_404() ) {
				echo '页面未找到!';
			} else {
				wp_title('',true);
			} ?></title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.min.css" type="text/css" media="screen" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ace-fonts.css" type="text/css" media="screen" />
		<!-- ace styles -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ace.min.css" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ace-part2.min.css" type="text/css" media="screen" />
		<![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ace-skins.min.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ace-rtl.min.css" type="text/css" media="screen" />
		
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ace-ie.min.css" type="text/css" media="screen" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php bloginfo('template_url'); ?>/assets/js/ace-extra.min.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php bloginfo('template_url'); ?>/assets/js/html5shiv.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/assets/js/respond.min.js"></script>
		<![endif]-->
	<?php wp_head(); ?><!-- 提升主题兼容性,在网页头部执行一些类如添加一些js或css的动作 -->
	</head>
	<?php flush(); ?><!-- 刷新缓存,用于提高程序运行效率 -->
	<body class="no-skin">
	<!-- #section:basics/navbar.layout -->
	<div id="navbar" class="navbar navbar-default">
		<script type="text/javascript">
			try{ace.settings.check('navbar' , 'fixed')}catch(e){}
		</script>

		<div class="navbar-container" id="navbar-container">
			<!-- #section:basics/sidebar.mobile.toggle -->
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<!-- /section:basics/sidebar.mobile.toggle -->
			<div class="navbar-header pull-left">
				<!-- #section:basics/navbar.layout.brand -->
				<a href="<?php echo get_option('home'); ?>/" class="navbar-brand">
					<small>
						<i class="fa fa-leaf"></i>
						<?php bloginfo('name'); ?>
					</small>
				</a>
			</div>
			<!-- /section:basics/navbar.dropdown -->
		</div><!-- /.navbar-container -->
	</div>

	<!-- /section:basics/navbar.layout -->
	<div class="main-container" id="main-container">
		<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>

		<!-- #section:basics/sidebar -->
		<div id="sidebar" class="sidebar responsive">
			<script type="text/javascript">
				try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
			</script>

			<ul class="nav nav-list">
				<li class="active">
					<li<?php if (is_home()) { echo ' class="current-cat"';} ?>>
						<a title="Home" href="/">
							<span class="menu-text"> 首页 </span>
						</a>
					</li>

					<?php
					    $cats = get_categories();
					    foreach ( $cats as $cat ) {
					    query_posts( 'showposts=10&cat=' . $cat->cat_ID );
					?>
						<li>
							<a href="#" class="dropdown-toggle">
								<span class="menu-text"> <?php echo $cat->cat_name; ?> </span>
								<b class="arrow fa fa-angle-down"></b>
							</a>
							<b class="arrow"></b>
							<ul class="submenu">
								<?php while ( have_posts() ) { the_post(); ?>
						        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						        <?php } wp_reset_query(); ?>
							</ul>
						</li>
					<?php } ?>
				</li>
				
			</ul><!-- /.nav-list -->

			<!-- #section:basics/sidebar.layout.minimize -->
			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>

			<!-- /section:basics/sidebar.layout.minimize -->
			<script type="text/javascript">
				try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
			</script>
		</div>