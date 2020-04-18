<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// 文章列表
?>

    <?php if($this->fields->postThumbUrl !=""): ?>
    <div class="thumb-panle">
        <a href="<?php $this->permalink() ?>">
            <div class="thumb-img" style="background-image: url(<?php echo $this->fields->postThumbUrl;?> )">
            </div>
        </a>
            
    </div>
    <? endif;?>
    <div class="posts-winds">
        <h2 class="post-title">
            <a href="<?php $this->permalink() ?>">
                <?php $this->title() ?>
            </a>
        </h2>
        <div class="post-content">
        <?php $this->excerpt(200,''); ?>
        </div>
        <div class="post-meta">
            <span class="text-white bg-success">  
                <?php _e('<i class="fas fa-calendar-alt"></i> '); ?><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
            </span>
            <span class="bg-danger text-white">
                <?php _e('<i class="fas fa-folder-minus"></i> '); ?><?php $this->category(','); ?>
            </span>
        </div>
    </div>