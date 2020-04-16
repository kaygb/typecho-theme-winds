<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
$error_url = '//'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$id = strstr($error_url, 'posts');
if($id != "" ||$id != null){//判断是否不等于空或者null
    $nameid = substr($id,5);// 截取posts之后的字符串
      header('HTTP/1.1 301 Moved Permanently'); //添加301状态码
      header("location://".$_SERVER['HTTP_HOST'].$nameid);//跳转页面    
  }
?>
<?php $this->need('head.php');
 $this->need('inc/header.php'); ?>

    <div class="col-mb-12 col-tb-8 col-tb-offset-2">

        <div class="error-page">
            <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
            <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
            <form method="post">
                <p><input type="text" name="s" class="text" autofocus /></p>
                <p><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
            </form>
        </div>

    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
