<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/*
*   这里的一小块代码为固定链接跳转
*   使用方式见：https://eas1.cn/167.html
*/

// $error_url = '//'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
// $id = strstr($error_url, 'posts');
// if($id != "" ||$id != null){//判断是否不等于空或者null
//     $nameid = substr($id,5);// 截取posts之后的字符串
//       header('HTTP/1.1 301 Moved Permanently'); //添加301状态码
//       header("location://".$_SERVER['HTTP_HOST'].$nameid);//跳转页面    
//   }
?>
<?php $this->need('inc/head.php');
 $this->need('inc/header.php'); ?>
<div class="main container">
</div>
    
	<?php $this->need('inc/footer.php'); ?>
