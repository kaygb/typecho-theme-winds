<?php
/** 
 * 测试页面
 *
 * @package custom
 *  
 * @author      风也
 * @version     2020-06-04 1.0
 * 
*/ 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

?>
<style>
.result{
    background: aliceblue;
    padding:20px;
}
</style>
<div style="max-width:800px;margin:0 auto;">
<h1 style="background:#eee;padding:20px;">JSON测试页面</h1>
<?php
//    $json = '{"name":"github","url":"//github.com","icon":"fa fa-test"},{"name":"bilibili","url":"//bilibili.com","icon":"fa fa-test"}';
   $json = '{"name":"github","url":"//github.com","icon":"fa fa-testt"}';
?>
<div class="result">
<span>JSON数据：<?php echo $json ?></span>
<h2>结果：</h2>

<?php
//    $json = '{"name":"github","url":"//github.com","icon":"fa fa-test"},{"name":"bilibili","url":"//bilibili.com","icon":"fa fa-test"}';
//    $json = '{"name":"github","url":"//github.com","icon":"fa fa-test"}';
// winds_procard_item($this->options->windsProCardItem);
winds_procard_item($json);


?>
</div>
</div>