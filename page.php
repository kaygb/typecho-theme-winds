<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('inc/head.php'); 
 $this->need('inc/header.php');
?>
<div class="main container">
    <div class="row">
        <div class="col-mb-12 col-lg-8 main-posts-content" id="main" role="main">
            <article class="post  wbg-white" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="post-head">
                    <?php $this->need('inc/post-meta.php');?>
                </div>
                <div id="post-content" class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
            </article>
            <?php $this->need('inc/comments.php'); ?>
        </div><!-- end #main-->
        <?php $this->need('inc/sidebar.php'); ?>
    </div>
</div>

<?php $this->need('inc/footer.php'); ?>
