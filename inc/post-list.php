<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// 文章列表
?>

<?php if($this->fields->defaultBanner !=""): ?>
<div class="thumb-panle">
    <a href="<?php $this->permalink() ?>">
    
        <div class="thumb-img">
        <img class="lazy-img" data-original="<?php echo $this->fields->defaultBanner;?>" src="<?php echo loading_bash64("color");?>" alt="" srcset="">
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
    <?php $this->need('inc/post-meta.php');?>
    
    
</div>