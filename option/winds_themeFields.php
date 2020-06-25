<?php

/**
 * winds_themeFields.php
 *
 * 文章自定义字段设置
 * 
 * https://eas1.cn/185.html
 *
 * @author      风也
 * @version     2020-06-25 1.0
 * 
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

function themeFields(Typecho_Widget_Helper_Layout $layout) {
    $defaultBanner = new Typecho_Widget_Helper_Form_Element_Text('defaultBanner', NULL, NULL, '文章头图地址','在这里填入一个图片URL地址, 将在首页以及文章顶部显示(兼容handsome主题默认头图)');

    $layout->addItem($defaultBanner);
}