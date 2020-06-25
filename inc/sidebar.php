<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<div class="col-lg-4 sidebar">  
    <div id="profile" class="profile">
        <?php 
        if($this->is('post')){
                getCatalog();
        }else{
            $this->need('inc/pro-card.php');
        }?>

    </div> 
    
</div>
