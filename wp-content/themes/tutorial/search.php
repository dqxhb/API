<?php get_header(); ?>

<!-- /section:basics/sidebar -->
<div class="main-content">
    <!-- #section:basics/content.breadcrumbs -->
    <div class="breadcrumbs" id="breadcrumbs" style="min-height: 47px">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>

        <!-- #section:basics/content.searchbox -->
        <div class="nav-search" id="nav-search" >
            <?php get_search_form(); ?>
        </div><!-- /.nav-search -->
        <!-- /section:basics/content.searchbox -->
    </div>

    <!-- /section:basics/content.breadcrumbs -->
    <div class="page-content">
        <!-- /section:settings.box -->
        <div class="page-content-area">
            <div class="page-header">
                
                    <div id="container">
        <div class="loopcontainer">         
                <?php if ( have_posts() ) : ?>
                <div class="tag-description">
                        <div class="tag-title">恭喜您，您搜索的关键字有结果啦！结果如下：</div>
                        
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to < ?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </div><!-- .tag-description -->

                <?php get_template_part( 'loop', 'search' ); ?>

                <?php else : ?>
                <div id="post-0" class="post no-results not-found">
                        <div class="tag-description">
                                <div class="tag-title"><?php printf( __( '未找到关键字"%s"的搜索结果', 'tanhaibonet' ), '<span>' . get_search_query() . '</span>' ); ?></div>
                                <div class="tag-content">用户提示：当您看到这样的提示，说明您搜索的关键字没有可匹配的内容，您可以试试搜索其他的关键字。</div>
                        </div>
                </div><!-- #post-0 -->
        
                <?php endif; ?>

        </div><!-- .loopcontainer -->

</div><!-- #container -->
            
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content-area -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->

<?php get_footer(); ?>


