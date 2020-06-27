<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// post-meta
?>

<div class="post-meta">
        <span class="">  
            <?php _e('<i class="fas fa-clock"></i> '); ?><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
        </span>
        <span class="">
            <?php _e('<i class="fas fa-folder-minus"></i> '); ?><?php $this->category(','); ?>
        </span>
        <span class="">
            <?php _e('<i class="fas fa-comment-alt"></i> '); ?><?php $this->commentsNum(_t('暂无评论'), _t('1 条评论'), _t(' %d 条评论')); ?>
        </span>
        <span><?php _e('<i class="fas fa-eye"></i> '); ?><?php get_post_view($this) ?> 次浏览</span>

        <span itemprop="keywords" class="tags">
        <?php if(count($this->tags) != 0):?>
        <i class="fas fa-hashtag"></i>
        <?php endif; ?>
         <?php $this->tags(',', true, ''); ?></span>


    </div>