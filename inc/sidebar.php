<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<div class="col-lg-4 sidebar">  
    <div class="profile">
        <img class="wavatar" src="<?php $this->options->avatarUrl(); ?>" alt="" srcset="">
        <div class="about">
        Hi,<?php $this->author(); ?>
        </div>
        <div class="social">
            <span  class="social-item">
                <a href="https://github.com/kaygb" target="_blank" title="GitHub" data-balloon="GitHub" data-balloon-pos="up">
                <i class="fab fa-github"></i>
                </a>
            </span>
            <span  class="social-item">
                <a href="https://github.com/kaygb" target="_blank" title="GitHub" data-balloon="GitHub" data-balloon-pos="up">
                <i class="fab fa-facebook"></i>
                </a>
            </span>
            <span  class="social-item">
                <a href="<?php $this->options->feedUrl(); ?>" target="_blank" title="RSS" data-balloon="RSS" data-balloon-pos="up">
                <i class="fas fa-rss"></i>
                </a>
            </span>
            <span  class="social-item">
                <a href="https://github.com/kaygb" target="_blank" title="GitHub" data-balloon="GitHub" data-balloon-pos="up">
                <i class="fab fa-twitter"></i>
                </a>
            </span>

        </div>
    </div> 
</div>
