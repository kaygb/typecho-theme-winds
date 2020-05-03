<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('inc/head.php'); 
 $this->need('inc/header.php');?>
<div class="main container">
    <div class="row">
    <div class="col-lg-8 col-md-12 col-12" id="main" role="main">
        <h3 class="archive-title wbg-white"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
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
