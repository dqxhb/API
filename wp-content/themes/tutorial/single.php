<?php get_header(); ?>

<!-- /section:basics/sidebar -->
<div class="main-content">
	<!-- #section:basics/content.breadcrumbs -->
	<div class="breadcrumbs" id="breadcrumbs" style="min-height: 47px">
		<script type="text/javascript">
			try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
		</script>

		<!-- <ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="#">Home</a>
			</li>
			<li class="active">Dashboard</li>
		</ul> --><!-- /.breadcrumb -->

		<!-- #section:basics/content.searchbox -->
		<div class="nav-search" id="nav-search">
			<?php get_search_form(); ?>
		</div><!-- /.nav-search -->

		<!-- /section:basics/content.searchbox -->
	</div>

	<!-- /section:basics/content.breadcrumbs -->
	<div class="page-content">
		<!-- /section:settings.box -->
		<div class="page-content-area">
			<div class="page-header">
				<h1>
					<?php the_title(); ?>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
				<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
						the_content(); 

						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );

					// End the loop.
					endwhile;
				?>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content-area -->
	</div><!-- /.page-content -->
</div><!-- /.main-content -->

<?php get_footer(); ?>