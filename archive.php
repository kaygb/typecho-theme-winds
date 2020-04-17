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
            <article class="posts" itemscope itemtype="http://schema.org/BlogPosting">
            <?php if($this->fields->postThumbUrl !=""): ?>
                <div class="thumb-panle">
                    <a href="<?php $this->permalink() ?>">
                        <div class="thumb-img" style="background-image: url(<?php echo $this->fields->postThumbUrl;?> )">
                        </div>
                    </a>
                        
                </div>
                <? endif;?>



                <div class="posts-winds">
                    <h2 class="post-title">
                        <a href="<?php $this->permalink() ?>">
                            <?php $this->title() ?>
                        </a>
                    </h2>
                    <div class="post-content">
                    <?php $this->excerpt(50,''); ?>
                    </div>
                    <div class="post-meta">
                        <span class="text-white bg-success">  
                            <?php _e('<i class="fas fa-calendar-alt"></i> '); ?><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
                        </span>
                        <span class="bg-danger text-white">
                            <?php _e('<i class="fas fa-folder-minus"></i> '); ?><?php $this->category(','); ?>
                        </span>
                    </div>
                </div>
    		</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
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
