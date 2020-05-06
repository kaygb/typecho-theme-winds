<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('inc/head.php'); 
 $this->need('inc/header.php');?>
<div class="main container">
    <div class="row">
    <div class="col-lg-8 col-md-12 col-12 main-posts-content" id="main" role="main">
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="posts card-show" itemscope itemtype="http://schema.org/BlogPosting">
            <?php $this->need('inc/post-list.php'); ?>
    		</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post  wbg-white">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <div id="w-pagination" class="w-pagination">
            <?php $this->pageNav('<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'); ?>
            </div>
    </div><!-- end #main -->
    <?php $this->need('inc/sidebar.php'); ?>
    </div><!-- end .row -->
</div>

	<?php $this->need('inc/footer.php'); ?>
