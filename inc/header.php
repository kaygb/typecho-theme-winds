<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="container-fluid nav-bac">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 nav">
            <span class="wind-logo"><?php $this->options->title(); ?></span>
                <ul>

                    <li>
                        <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    </li>

                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></a>
                <?php endwhile; ?>

                </ul>
                <span class="winds-search search-form-input"><i class="fas fa-search"></i></span>
            </div>
        </div>

    </div>

</div>
<div class="blur-nav-bg"></div>
<div class="blur-nav"></div>

