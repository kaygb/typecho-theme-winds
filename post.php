<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('inc/head.php'); 
 $this->need('inc/header.php');?>


<div class="main container">
    <div class="">
        <div class="row main-posts-content">
                <article id="main-post" class="post clo-md-6 wbg-white" itemscope itemtype="http://schema.org/BlogPosting">
                <div class="post-head">
                    <?php $this->need('inc/post-meta.php');?>
                </div>
                <div id="post-content" class="post-content" itemprop="articleBody">
                <?php 
                
                    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
                    $replacement = '<a href="$1" data-fancybox="gallery" /><img src="$1" alt="'.$this->title.'" title="点击放大图片"></a>';
                    $content = preg_replace($pattern, $replacement, $this->content);
                    echo $content; ?>
                    <?php $this->options->windsAd(); ?>
                </div>
                
                
            </article>
            <?php $this->need('inc/comments.php'); ?>
            <div class="post-wnear wbg-white row">
 
                    <span class="post-near-pre col-lg-6">
                        <small class="d-block text-xs text-muted">上一篇</small>    
                        <?php $this->thePrev('%s','没有更早的文章了'); ?>
                    </span>
                    <span class="post-near-next col-lg-6">
                        <small class="d-block text-xs text-muted">下一篇</small>    
                        <?php $this->theNext('%s','已经是最新的文章了'); ?>
                    </span>

            </div>



            
        </div>
        <?php //$this->need('inc/sidebar.php'); ?>
    </div>
</div>






<?php $this->need('inc/footer.php'); ?>
