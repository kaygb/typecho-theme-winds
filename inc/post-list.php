<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// 文章列表
?>

<?php if($this->fields->defaultBanner !=""): ?>
<div class="thumb-panle">
    <a href="<?php $this->permalink() ?>">
    
        <div class="thumb-img">
        <img class="lazy-img" data-original="<?php echo $this->fields->defaultBanner;?>" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=" alt="" srcset="">
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
    <?php $this->excerpt(100,''); ?>...
    </div>
    <div class="post-meta">
        <span class="">  
            <?php _e('<i class="fas fa-calendar-alt"></i> '); ?><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
        </span>
        <span class="">
            <?php _e('<i class="fas fa-folder-minus"></i> '); ?><?php $this->category(','); ?>
        </span>
    </div>
    
</div>