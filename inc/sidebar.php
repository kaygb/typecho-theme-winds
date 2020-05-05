<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<div class="col-lg-4 sidebar">  
    <div class="profile">
        <?php 
        if($this->is('post')){
            if(getCatalog() == 0){
                
                $this->need('inc/pro-card.php');
            }else{
                getCatalog();
            }
        }else{
            $this->need('inc/pro-card.php');
        }?>

    </div> 
    
</div>
