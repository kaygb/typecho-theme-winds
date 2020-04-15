<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('inc/header.php'); 
 $this->need('inc/head.php');?>


<div class="main container">
    <div class="row">
        <div class="col-lg-8">
                <div class="thumb-panle">

                    <div class="thumb-img" style="background-image: url(/imgs/tx1.jpg)">
                    </div>

                        
                </div>
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
            <div class="post-wnear">
            <ul class="post-near wbg-white">
                <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
                <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
            </ul> 
            </div>

            <?php $this->need('inc/comments.php'); ?>

            
        </div>
        <?php $this->need('inc/sidebar.php'); ?>
    </div>
</div>






<?php $this->need('inc/footer.php'); ?>
