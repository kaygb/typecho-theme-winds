<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>

<div class="profile-content">
    <div class="avatar-slant">
        <img class="wavatar lazyload" src="<?php echo loading_bash64();?>" data-original="<?php $this->options->profileImgUrl(); ?>" alt="" srcset="">
        <!-- <div class="winds-slant"></div> -->

    </div>
    <div class="card-profile">
        <img class="wavatar-s" src="<?php $this->options->avatarUrl(); ?>"  alt="" srcset="">
        <div class="about">
        <?php $this->options->procardName(); ?>
        </div>
    </div>
    <div class="statistics">
    <div class="row no-gutters text-center">
    <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
        <div class="col">
            <span class="font-theme font-weight-bold text-md"><?php $stat->publishedPostsNum(); ?>
</span>
            <small class="d-block text-xs text-muted">文章</small>
        </div>
        <div class="col">
            <span class="font-theme font-weight-bold text-md"><?php $stat->categoriesNum() ?></span>
            <small class="d-block text-xs text-muted">分类</small>
        </div>
        <div class="col">
            <span class="font-theme font-weight-bold text-md"><?php $stat->publishedCommentsNum() ?></span>
            <small class="d-block text-xs text-muted">评论</small>
        </div>
        <div class="col">
            <span class="font-theme font-weight-bold text-md"><?php echo $stat->publishedPagesNum?></span>
            <small class="d-block text-xs text-muted">页面</small>
        </div>
    </div>

    </div>
    <div class="social">
        <span  class="social-item">
            <a href="https://github.com/kaygb" target="_blank" title="GitHub" data-balloon="GitHub" data-balloon-pos="up">
            <i class="fab fa-github"></i>
            </a>
        </span>
        <span  class="social-item">
            <a href="https://github.com/kaygb" target="_blank" title="Facebook" data-balloon="Facebook" data-balloon-pos="up">
            <i class="fab fa-facebook"></i>
            </a>
        </span>
        <span  class="social-item">
            <a href="<?php $this->options->feedUrl(); ?>" target="_blank" title="RSS" data-balloon="RSS" data-balloon-pos="up">
            <i class="fas fa-rss"></i>
            </a>
        </span>
        <span  class="social-item">
            <a href="https://github.com/kaygb" target="_blank" title="Twitter" data-balloon="Twitter" data-balloon-pos="up">
            <i class="fab fa-twitter"></i>
            </a>
        </span>
    </div>
</div>