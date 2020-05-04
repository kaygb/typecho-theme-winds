<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="container-fluid nav-bac">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 nav pc-nav">
            <a class="wind-logo text-white" href="<?php $this->options->siteUrl(); ?>"><?php //$this->options->title(); ?>
                <img src="https://cdn.jsdelivr.net/gh/kaygb/blog-images/static_image/kaygb-logo/windyeah.svg" style="height: 40px;">
            </a>
                <ul>
                    <li>
                        <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    </li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <li><a<?php if($this->is('page', $pages->slug)): ?> class="current" <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></a>
                    <?php endwhile; ?>
                    <li class="dropdown winds-category-menu">
                    <a  href="#">分类</a>
                        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=dropdown-menu winds-category-menu-item'); ?>
                    </li>
                    
                    <li>
                            <a href="//eas1.cn" target="_blank"><?php _e('主站'); ?></a>
                    </li>
                    
                </ul>
                <span class="winds-search search-form-input"><i class="fas fa-search"></i></span>
            </div>
            <!-- mobile-nav -->
            <div class="col-lg-12 mobile-nav">
            
                <a class="wind-logo-mb text-white" href="<?php $this->options->siteUrl(); ?>"><?php //$this->options->title(); ?>
                    <img src="https://cdn.jsdelivr.net/gh/kaygb/blog-images/static_image/kaygb-logo/windyeah.svg" style="height: 40px;position: absolute;top: 0;">
                </a>
               
                <span class="winds-mb-menu wd-md-navspan"><i class="fas fa-bars"></i></span>
                <span class="winds-mb-menu-f wd-md-navspan"><i class="fas fa-bars"></i></span>
                <span class="winds-search-mb wd-md-navspan search-form-input"><i class="fas fa-search"></i></span>
            </div>
            <div class="mobile-menu ">
                <div class="container">
                    <span class="mobile-menu-title">页面</span>
                    <div class="pages mobile-menu-section">
                        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while($pages->next()): ?>
                        <a<?php if($this->is('page', $pages->slug)): ?> class="current" <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                        <?php endwhile; ?>
                    </div>
                    <span class="mobile-menu-title">分类</span>
                    <div class="categories mobile-menu-section">
                        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass='); ?>
                    </div>
                            
                    <span class="mobile-menu-title">其他</span>
                    <div class="wind-other mobile-menu-section">
                        <a href="//eas1.cn" target="_blank"><?php _e('主站'); ?></a>
                    </div>
                </div>

                    
                    
                </ul>
            </div>

        </div>

    </div>

</div>
<div class="blur-nav-bg"></div>
<div class="blur-nav"></div>

