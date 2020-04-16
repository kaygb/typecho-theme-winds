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
                        <span >
                            <?php _e('<i class="fas fa-user"></i> '); ?><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
                        </span>
                        <span class="text-success">  
                            <?php _e('<i class="fas fa-calendar-alt"></i> '); ?><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
                        </span>
                        <span class="text-danger">
                            <?php _e('<i class="fas fa-folder-minus"></i> '); ?><?php $this->category(','); ?>
                        </span>
                        <span class="text-primary">
                        <?php _e('<i class="fas fa-comment-dots"></i> '); ?><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
                        </span>
                    </div>
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
                <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
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
