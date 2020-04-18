<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('inc/head.php'); 
 $this->need('inc/header.php');
?>
<div class="main container">
    <div class="row">
        <div class="col-mb-12 col-lg-8" id="main" role="main">
        <?php if($this->fields->postThumbUrl !=""): ?>
                <div class="thumb-panle">
                        <div class="thumb-img" style="background-image: url(<?php echo $this->fields->postThumbUrl;?> )">
                        </div>
                </div>
                <? endif;?>
            <article class="post wbg-white" itemscope itemtype="http://schema.org/BlogPosting">
                <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
            </article>
            <?php $this->need('inc/comments.php'); ?>
        </div><!-- end #main-->
        <?php $this->need('inc/sidebar.php'); ?>
    </div>
</div>

<?php $this->need('inc/footer.php'); ?>
