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
<h1 style="background:#eee;padding:20px;">测试页面</h1>
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

<img src="<?php echo tbash64("test"); ?>">

<?php function tbash64($color){
    switch($color){
            case "test":
                return ("https://tva2.sinaimg.cn/large/0072Vf1pgy1foxkj1cgi7j31hc0u0n9m.jpg");
                break;
            case "gray":
                return ("data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==");
                break;
            case "black";
                return ("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==");
                break;
            default:
                return ("data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==");
    
        }
}