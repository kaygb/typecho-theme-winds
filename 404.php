<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/*
*   这里的一小块代码为固定链接跳转
*   使用方式见：https://eas1.cn/167.html
*/

//标注:此处404状态码 可以通过来源获取生成页面js 或者通过js
//js历史记录操作回调正常页面 当然也可以选择调回主页 debug模式会导致404页面消失
?>
<?php $this->need('inc/head.php');
 $this->need('inc/header.php'); ?>
<div class="main container">
	
</div>
    
	<?php $this->need('inc/footer.php'); ?>
