<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// post-meta
?>

<?php if($this->is('post')):?>
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

         <?php if($this->user->hasLogin()):?>
            <span><?php _e('<i class="fas fa-edit"></i> '); ?>
                <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" target="_blank">编辑</a>
            </span>
            <?php endif;?>
    </div>
         <?php else: ?>
        <div class="post-meta">
        <span class="">  
            <?php _e('<i class="fas fa-clock"></i> '); ?><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
        </span>
        <span class="">
            <?php _e('<i class="fas fa-comment-alt"></i> '); ?><?php $this->commentsNum(_t('暂无评论'), _t('1 条评论'), _t(' %d 条评论')); ?>
        </span>
        <span><?php _e('<i class="fas fa-eye"></i> '); ?><?php get_post_view($this) ?> 次浏览</span>

         <?php if($this->user->hasLogin()):?>
            <span><?php _e('<i class="fas fa-edit"></i> '); ?>
                <a href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?>" target="_blank">编辑</a>
            </span>
            <?php endif;?>
    </div>
         <?php endif;?>