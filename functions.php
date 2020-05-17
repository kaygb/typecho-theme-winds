<?php

/**
 * functions.php
 *
 * 主题函数类
 * 
 * https://eas1.cn/185.html
 *
 * @author      风也
 * @version     2020-05-28 01
 * 
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $t = new Typecho_Widget_Helper_Form_Element_Text('siteName', NULL, NULL, _t('站点名称'), _t('在首页导航栏下显示'));
    $form->addInput($t);
    
    $t = new Typecho_Widget_Helper_Form_Element_Text('bgImgUrl', NULL, NULL, _t('背景图片地址'), _t('在这里填入一个图片 URL 地址, 用于背景模糊设置'));
    $form->addInput($t);

    $t = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($t);

    $t = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('个人卡片头像'), _t('在这里填入一个图片 URL 地址, 以在侧栏显示'));
    $form->addInput($t);

    $t = new Typecho_Widget_Helper_Form_Element_Text('profileImgUrl', NULL, NULL, _t('个人卡片大图'), _t('在这里填入一个图片 URL 地址, 以在侧栏显示'));
    $form->addInput($t);

    $t = new Typecho_Widget_Helper_Form_Element_Text('windsExcerptNum', NULL, NULL, _t('首页文章摘要字数'), _t('默认100'));
    $form->addInput($t);

    $t =  new Typecho_Widget_Helper_Form_Element_Textarea('head', NULL, NULL, _t('自定义head标签内容 <a href="https://wiki.eas1.cn/archives/zh-doc-of-typecho-theme-winds/#toc_9">文档</a>'), _t('输出在head标签'));
    $form->addInput($t);

    $t =  new Typecho_Widget_Helper_Form_Element_Textarea('headnav', NULL, NULL, _t('自定义导航栏 <a href="https://wiki.eas1.cn/archives/zh-doc-of-typecho-theme-winds/#toc_10">文档</a>'), _t('输出在导航栏'));
    $t->addInput($t);

    $t =  new Typecho_Widget_Helper_Form_Element_Textarea('footer', NULL, NULL, _t('自定义footer标签内容 <a href="https://wiki.eas1.cn/archives/zh-doc-of-typecho-theme-winds/#toc_11">文档</a>'), _t('输出在底部'));
    $form->addInput($t);

    $t =  new Typecho_Widget_Helper_Form_Element_Text('beginTime', NULL, NULL, _t('网站开始时间'), _t('格式：2019-01-01'));
    $form->addInput($t);

    $t =  new Typecho_Widget_Helper_Form_Element_Text('beianNum', NULL, NULL, _t('备案号'), _t('在这里填入网站备案号'));
    $form->addInput($t);

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
    $t = new Typecho_Widget_Helper_Form_Element_Text('defaultBanner', NULL, NULL, '文章头图地址','在这里填入一个图片URL地址, 将在首页以及文章顶部显示(兼容handsome主题默认头图)');
    $layout->addItem($t);
}

function winds_fancybox(){
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
                        $replacement = '<a href="$1" data-fancybox="gallery" /><img src="$1" alt="'.$this->title.'" title="点击放大图片"></a>';
                        $content = preg_replace($pattern, $replacement, $this->content);
                        echo $content;
}

function createCatalog($obj) {    //为文章标题添加锚点
    global $catalog;
    global $catalog_count;
    $catalog = array();
    $catalog_count = 0;
    $obj = preg_replace_callback('/<h([1-6])(.*?)>(.*?)<\/h\1>/i', function($obj) {
        global $catalog;
        global $catalog_count;
        $catalog_count ++;
        $catalog[] = array('text' => trim(strip_tags($obj[3])), 'depth' => $obj[1], 'count' => $catalog_count);
        return '<h'.$obj[1].$obj[2].'><a name="cl-'.$catalog_count.'"></a>'.$obj[3].'</h'.$obj[1].'>';
    }, $obj);
    return $obj;
}

function getCatalog() {    //输出文章目录容器
    global $catalog;
    $index = '';
    if ($catalog) {
        $index = '<ul class="wind-woc-index">'."\n";
        $prev_depth = '';
        $to_depth = 0;
        foreach($catalog as $catalog_item) {
            $catalog_depth = $catalog_item['depth'];
            if ($prev_depth) {
                if ($catalog_depth == $prev_depth) {
                    $index .= '</li>'."\n";
                } elseif ($catalog_depth > $prev_depth) {
                    $to_depth++;
                    $index .= '<ul>'."\n";
                } else {
                    $to_depth2 = ($to_depth > ($prev_depth - $catalog_depth)) ? ($prev_depth - $catalog_depth) : $to_depth;
                    if ($to_depth2) {
                        for ($i=0; $i<$to_depth2; $i++) {
                            $index .= '</li>'."\n".'</ul>'."\n";
                            $to_depth--;
                        }
                    }
                    $index .= '</li>';
                }
            }
            $index .= '<li><a href="#cl-'.$catalog_item['count'].'">'.$catalog_item['text'].'</a>';
            $prev_depth = $catalog_item['depth'];
        }
        for ($i=0; $i<=$to_depth; $i++) {
            $index .= '</li>'."\n".'</ul>'."\n";
        }
    $index = '<div class="winds-toc"><div id="toc-container">'."\n".'<div id="toc">'."\n".'<strong class="wind-toc-title">文章目录</strong>'."\n".$index.'</div>'."\n".'</div></div>'."\n";
    }
    echo $index;
}

function themeInit($archive) {
    if ($archive->is('single')) {
        $archive->content = createCatalog($archive->content);
    }
}


function trimall($str)//删除空格
{
    $limit=array(" ","　","\t","\n","\r");
    $rep=array("","","","","");
    return str_replace($limit,$rep,$str); 
}

// 文章缩略图


//总访问量
function theAllViews()
{
    $db = Typecho_Db::get();
    $row = $db->fetchAll('SELECT SUM(VIEWS) FROM `typecho_contents`');
        echo number_format($row[0]['SUM(VIEWS)']);
}
