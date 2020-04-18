<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// 文章列表
?>
<div class="main container">
    <div class="row">
        <div class="col-lg-8 col-md-12 col-12">

        <?php //$this->need('inc/pro-card.php'); ?>
        <?php //$this->need('inc/carousel.php'); ?>
            <?php while($this->next()): ?>
            <article class="posts card-show">    
            <?php $this->need('inc/post-list.php'); ?>
            
            </article>
            <?php endwhile; ?>
            <div id="w-pagination" class="w-pagination">
            <?php $this->pageNav('<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'); ?>
            </div>
        </div>

        <?php $this->need('inc/sidebar.php'); ?>
            

    </div><!-- end .row -->
</div>
