<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('inc/head.php'); 
 $this->need('inc/header.php');?>


<div class="main container">
    <div class="row">
        <div class="col-lg-8">
        <?php if($this->fields->postThumbUrl !=""): ?>
                <div class="thumb-panle">
                        <div class="thumb-img" style="background-image: url(<?php echo $this->fields->postThumbUrl;?> )">
                        </div>
                </div>
                <? endif;?>
                <article class="post wbg-white" itemscope itemtype="http://schema.org/BlogPosting">
                
                <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
                <div class="post-meta">
                        <span class="text-white bg-success">  
                            <?php _e('<i class="fas fa-calendar-alt"></i> '); ?><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
                        </span>
                        <span class="text-white bg-danger">
                            <?php _e('<i class="fas fa-folder-minus"></i> '); ?><?php $this->category(','); ?>
                        </span>
                    </div>
                <div class="post-content" itemprop="articleBody">
                <?php
                        $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
                        $replacement = '<a href="$1" data-fancybox="gallery" /><img src="$1" alt="'.$this->title.'" title="点击放大图片"></a>';
                        $content = preg_replace($pattern, $replacement, $this->content);
                        echo $content;
                    ?>
                </div>
                <span itemprop="keywords" class="tags"><?php $this->tags(' ', true, ''); ?></span>
            </article>
            <div class="post-wnear row">
 
                    <span class="post-near-pre wbg-white col-lg-6"><i class="fas fa-angle-double-left text-success"></i> <?php $this->thePrev('%s','没有更早的文章了'); ?></span>
                    <span class="post-near-next wbg-white col-lg-6"> <?php $this->theNext('%s','已经是最新的文章了'); ?> <i class="fas fa-angle-double-right text-success"></i></span>

            </div>

            <?php $this->need('inc/comments.php'); ?>

            
        </div>
        <?php $this->need('inc/sidebar.php'); ?>
    </div>
</div>






<?php $this->need('inc/footer.php'); ?>
