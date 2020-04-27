<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('inc/head.php'); 
 $this->need('inc/header.php');
?>
<div class="main container">
    <div class="row">
        <div class="col-mb-12 col-lg-8" id="main" role="main">
        <?php if($this->fields->postThumbUrl !=""): ?>
            <div class="thumb-img">
                    <img class="lazy-img" data-original="<?php echo $this->fields->postThumbUrl;?>" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=" alt="" srcset="">
                </div>
                <? endif;?>
            <article class="post wbg-white" itemscope itemtype="http://schema.org/BlogPosting">
                <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
            </article>
            <?php $this->need('inc/comments.php'); ?>
        </div><!-- end #main-->
        <?php $this->need('inc/sidebar.php'); ?>
    </div>
</div>

<?php $this->need('inc/footer.php'); ?>
