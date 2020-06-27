<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// 文章列表
?>

<?php if($this->fields->defaultBanner !=""): ?>
<div class="thumb-panle">
    <a href="<?php $this->permalink() ?>">
    
        <div class="thumb-img">
        <img class="lazy-img" data-original="<?php echo $this->fields->defaultBanner;?>" src="<?php echo loading_bash64();?>" alt="" srcset="">
        </div>
    </a>
        
</div>
<? endif;?>


<div class="posts-winds wbg-white">

    <h2 class="post-title">
        <a href="<?php $this->permalink() ?>">
            <?php $this->title() ?>
        </a>
    </h2>
    <div class="post-content">
    <?php 
    // $excerptNum = intval($this->options->windsExcerptNum());
    $this->excerpt(100,''); ?>...
    </div>
    <div class="post-meta">
        <span class="">  
            <?php _e('<i class="fas fa-calendar-alt"></i> '); ?><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
        </span>
        <span class="">
            <?php _e('<i class="fas fa-folder-minus"></i> '); ?><?php $this->category(','); ?>
        </span>
        <span class="">
            <?php _e('<i class="fas fa-comment-alt"></i> '); ?><?php $this->commentsNum(_t('暂无评论'), _t('1 条评论'), _t(' %d 条评论')); ?>
        </span>
        <span><?php _e('<i class="fas fa-eye"></i> '); ?><?php get_post_view($this) ?> 次浏览</span>
    </div>
    
</div>