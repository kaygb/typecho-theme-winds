<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if($this->is('archive')): ?>

    <div class="bg-blur">
        
        <h1 class="main-title container">

                <?php $this->archiveTitle(array(
                    'category'  =>  _t('分类 "%s" 下的文章'),
                    'search'    =>  _t('包含关键字 "%s" 的文章'),
                    'tag'       =>  _t('包含标签 "%s" 的文章'),
                    'author'    =>  _t('"%s" 发布的文章')
                ), '', '');  ?>

        </h1> 
        
        <img class="lazy-img"  data-original="<?php  $this->options->bgImgUrl();?>" src="<?php echo loading_bash64("color");?>" alt="" srcset="">
    </div>

    
<?php else: ?>
    
<?php if($this->is('single')):?>        
    <div class="bg-blur">
        
        <h1 class="main-title container">
            <?php $this->title(); ?>
        </h1> 
        
        <img class="lazy-img"  data-original="<?php 
        if($this->fields->defaultBanner !=""){
            echo $this->fields->defaultBanner;
        }else{
            $this->options->bgImgUrl();
        }
        ?>" src="<?php echo loading_bash64("color");?>" alt="" srcset="">
    </div>
    

    <?php else:?>
        <div class="bg-blur">
            <h1 class="main-title container"><?php $this->options->siteName(); ?></h1>    
            <img class="lazy-img"  data-original="<?php $this->options->bgImgUrl(); ?>" src="<?php echo loading_bash64("color");?>" alt="" srcset="">
        </div>
            

    <?php endif;?>
<?php endif;?>

