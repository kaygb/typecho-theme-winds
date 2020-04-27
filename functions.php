<?php

/**
 * functions.php
 *
 * 主题函数类
 * 
 * https://eas1.cn/185.html
 *
 * @author      风也
 * @version     2020-04-27 1.0
 * 
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);

    $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('侧栏头像地址'), _t('在这里填入一个图片 URL 地址, 以在侧栏显示'));
    $form->addInput($avatarUrl);

    $bgImgUrl = new Typecho_Widget_Helper_Form_Element_Text('bgImgUrl', NULL, NULL, _t('背景图片地址'), _t('在这里填入一个图片 URL 地址, 用于背景模糊设置'));
    $form->addInput($bgImgUrl);

    $beianNum =  new Typecho_Widget_Helper_Form_Element_Text('beianNum', NULL, NULL, _t('备案号'), _t('在这里填入网站备案号'));
    $form->addInput($beianNum);
    


    // $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    // array('ShowRecentPosts' => _t('显示最新文章'),
    // 'ShowRecentComments' => _t('显示最近回复'),
    // 'ShowCategory' => _t('显示分类'),
    // 'ShowArchive' => _t('显示归档'),
    // 'ShowOther' => _t('显示其它杂项')),
    // array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    // $form->addInput($sidebarBlock->multiMode());
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

function themeFields(Typecho_Widget_Helper_Layout $layout) {
    $postThumbUrl = new Typecho_Widget_Helper_Form_Element_Text('postThumbUrl', NULL, NULL, '文章头图地址','在这里填入一个图片URL地址, 将在首页以及文章顶部显示');
    $defaultBanner = new Typecho_Widget_Helper_Form_Element_Text('defaultBanner', NULL, NULL, '文章头图地址','在这里填入一个图片URL地址, 将在首页以及文章顶部显示(兼容handsome)');
    $layout->addItem($postThumbUrl);
    $layout->addItem($defaultBanner);

}

