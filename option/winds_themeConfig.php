<?php

/**
 * winds_option.php
 *
 * 主题外观设置
 * 
 * https://eas1.cn/185.html
 *
 * @author      风也
 * @version     2020-06-25 1.0
 * 
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {


    $siteName  = new Typecho_Widget_Helper_Form_Element_Text('siteName', NULL, NULL, _t('站点名称'), _t('在首页导航栏下显示'));
    $form->addInput($siteName);



    $windsSeoDescription  = new Typecho_Widget_Helper_Form_Element_Text('windsSeoDescription', NULL, NULL, _t('站点SEO描述'), _t('面对搜索引擎，在首页显示'));
    $form->addInput($windsSeoDescription);

    $procardName = new Typecho_Widget_Helper_Form_Element_Text('procardName', NULL, NULL, _t('个人资料卡片名称'), _t('显示在个人资料卡图片下方'));
    $form->addInput($procardName);

    $bgImgUrl = new Typecho_Widget_Helper_Form_Element_Text('bgImgUrl', NULL, NULL, _t('背景图片地址'), _t('在这里填入一个图片 URL 地址, 用于背景模糊设置'));
    $form->addInput($bgImgUrl);

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);

    $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('个人卡片头像'), _t('在这里填入一个图片 URL 地址, 以在侧栏显示'));
    $form->addInput($avatarUrl);

    // $profileImgUrl = new Typecho_Widget_Helper_Form_Element_Text('profileImgUrl', NULL, NULL, _t('个人卡片大图'), _t('在这里填入一个图片 URL 地址, 以在侧栏显示'));
    // $form->addInput($profileImgUrl);

    $windsExcerptNum = new Typecho_Widget_Helper_Form_Element_Text('windsExcerptNum', NULL, NULL, _t('首页文章摘要字数'), _t('默认100'));
    $form->addInput($windsExcerptNum);

    $head =  new Typecho_Widget_Helper_Form_Element_Textarea('head', NULL, NULL, _t('自定义head标签内容 <a href="https://wiki.eas1.cn/archives/zh-doc-of-typecho-theme-winds/#toc_9">文档</a>'), _t('输出在head标签'));
    $form->addInput($head);

    $headnav =  new Typecho_Widget_Helper_Form_Element_Textarea('headnav', NULL, NULL, _t('自定义导航栏 <a href="https://wiki.eas1.cn/archives/zh-doc-of-typecho-theme-winds/#toc_10">文档</a>'), _t('输出在导航栏'));
    $form->addInput($headnav);

    $footer =  new Typecho_Widget_Helper_Form_Element_Textarea('footer', NULL, NULL, _t('自定义footer标签内容 <a href="https://wiki.eas1.cn/archives/zh-doc-of-typecho-theme-winds/#toc_11">文档</a>'), _t('输出在底部'));
    $form->addInput($footer);

    $windsAd =  new Typecho_Widget_Helper_Form_Element_Textarea('windsAd', NULL, NULL, _t('文章底部广告代码'), _t('在这里填入广告代码，推荐谷歌广告'));
    $form->addInput($windsAd);

    $beginTime =  new Typecho_Widget_Helper_Form_Element_Text('beginTime', NULL, NULL, _t('网站开始时间'), _t('格式：2019-01-01'));
    $form->addInput($beginTime);

    $beianNum =  new Typecho_Widget_Helper_Form_Element_Text('beianNum', NULL, NULL, _t('备案号'), _t('在这里填入网站备案号'));
    $form->addInput($beianNum);

    $winds301 =  new Typecho_Widget_Helper_Form_Element_Radio('winds301', array('0' => '关闭', '1' => '开启'), '0', '404页面固定链接跳转', '实验性功能，请选择关闭');
    $form->addInput($winds301);

    $windsProCardItem =  new Typecho_Widget_Helper_Form_Element_Textarea('windsProCardItem', NULL, NULL, _t('个人卡片超链接'), _t('在这里填入JSO格式'));
    $form->addInput($windsProCardItem);


    // $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    // array('ShowRecentPosts' => _t('显示最新文章'),
    // 'ShowRecentComments' => _t('显示最近回复'),
    // 'ShowCategory' => _t('显示分类'),
    // 'ShowArchive' => _t('显示归档'),
    // 'ShowOther' => _t('显示其它杂项')),
    // array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    // $form->addInput($sidebarBlock->multiMode());
}

