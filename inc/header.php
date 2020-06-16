<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="container-fluid nav-bac">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 nav pc-nav">
            <a class="wind-logo text-white" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?>
                <!-- <img src="https://cdn.jsdelivr.net/gh/kaygb/blog-images/static_image/kaygb-logo/windyeah.svg" style="height: 40px;"> -->
            </a>
                <ul>
                    <li>
                        <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    </li>
                    <!-- 自定义导航 -->
                    <?php $this->options->headnav(); ?>
                    <li class="dropdown winds-category-page">
                    <a  href="#">页面</a>
                        <ul class="dropdown-menu winds-category-page-item">
                            <?php 
                            $this->widget('Widget_Contents_Page_List')->to($pages);?>
                            <?php while($pages->next()): ?>
                                <li>
                                    <a <?php if($this->is('page', $pages->slug)): ?> <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                                </li>
                                <!-- <?php echo ("<script>alert(\"非隐藏页面\")</script>");?> -->
                            <?php endwhile; ?>
                            <?php while($pages->status == "hidden"): ?>
                            <?php echo ("<script>alert(\"隐藏页面\")</script>");?>
                                <li>
                                    <a <?php if($this->is('page', $pages->slug)): ?> <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </li>
                    <li class="dropdown winds-category-menu">
                    <a  href="#">分类</a>
                        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=dropdown-menu winds-category-menu-item'); ?>
                    </li>
                    

                    
                </ul>
                <span class="winds-search search-form-input"><i class="fas fa-search"></i></span>
            </div>
            <!-- mobile-nav -->
            <div class="col-lg-12 mobile-nav">
            
                <a class="wind-logo-mb text-white" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?>
                    <!-- <img src="https://cdn.jsdelivr.net/gh/kaygb/blog-images/static_image/kaygb-logo/windyeah.svg" style="height: 40px;position: absolute;top: 0;"> -->
                </a>
               
                <span class="winds-mb-menu wd-md-navspan"><i class="fas fa-bars"></i></span>
                <span class="winds-mb-menu-f wd-md-navspan"><i class="fas fa-times"></i></span>
                <span class="winds-search-mb wd-md-navspan search-form-input"><i class="fas fa-search"></i></span>
            </div>
            <div class="mobile-menu ">
                <div class="container">
                    <span class="mobile-menu-title">导航</span>


                    <ul class="categories mobile-menu-section row">
                    <?php $this->options->headnav(); ?>
                    </ul>
                    <hr class="wind-menu-hr">
                    <span class="mobile-menu-title">页面</span>

                    <ul class="pages mobile-menu-section row">
                        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while($pages->next()): ?>
                        <li class="col-6">
                        <a <?php if($this->is('page', $pages->slug)): ?> class="current" <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <hr class="wind-menu-hr">
                    <span class="mobile-menu-title">分类</span>

                    <ul class="categories mobile-menu-section row">
                        <?php $this->widget('Widget_Metas_Category_List')->parse('<li class="col-6"><a href="{permalink}">{name}</a></li>');?>
                        </ul>
                        <hr class="wind-menu-hr">
                </div>

                    
                    
                </ul>
            </div>

        </div>

    </div>

</div>
<div class="blur-nav-bg"></div>
<div class="blur-nav"></div>

