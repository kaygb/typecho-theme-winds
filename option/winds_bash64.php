<?php

/**
 * winds_bash64.php
 *
 * 主题bash64图片生成
 * 
 * https://eas1.cn/185.html
 *
 * @author      风也
 * @version     2020-06-25 1.0
 * 
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

// bash64加载动画
function loading_bash64($color){
    
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
    // 灰色
    // return ("data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==");

        // 透明
    // return ("data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==");

}