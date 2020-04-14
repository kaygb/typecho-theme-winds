<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// 文章列表
?>
<div class="main container">
    <div class="row">
        <div class="col-lg-8 col-md-12 col-12">
            <?php while($this->next()): ?>
            <article class="posts">    
                <div class="thumb-panle">
                    <a href="<?php $this->permalink() ?>">
                        <div class="thumb-img" style="background-image: url(https://file.kaygb.top/upload/20191212/b7c9bff871d1d.jpg)">
                        </div>
                    </a>
                        
                </div>
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
                </div>
            </article>
            <?php endwhile; ?>
            <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
        </div>

        <div class="col-lg-4">
        <?php //$this->need('inc/sidebar.php'); ?>
            <div class="profile">侧栏</div>
        </div>
    </div><!-- end .row -->
</div>
