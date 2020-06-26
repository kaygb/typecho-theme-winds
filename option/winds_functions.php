<?php

/**
 * functions.php
 *
 * 主题函数类
 * 
 * https://eas1.cn/185.html
 *
 * @author      风也
 * @version     2020-06-25 1.0
 * 
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

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

// 懒加载gravatar

function lazy_gravatar($size = 32, $default = NULL) 
{
    if ($this->options->commentsAvatar && 'comment' == $this->type) {
        $rating = $this->options->commentsAvatarRating;
        
        $this->pluginHandle(__CLASS__)->trigger($plugged)->gravatar($size, $rating, $default, $this); 
        if (!$plugged) {
            //$url = Typecho_Common::gravatarUrl($this->mail, $size, $rating, $default, $this->request->isSecure());
            $mailHash = NULL; 
            if (!empty($this->mail)) {
                $mailHash = md5(strtolower($this->mail));
            }       
            $url = 'https://secure.gravatar.com/avatar/';
            // $url = 'https://cdn.v2ex.com/gravatar/';
            if (!empty($this->mail)){
                $url .= $mailHash;
            }       
            $url .= '?s=' . $size;
            $url .= '&r=' . $rating;
            $url .= '&d=' . $default;
            echo '<img class="avatar lazy-img" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" data-original=="' . $url . '" alt="' .
            $this->author . '" width="' . $size . '" height="' . $size . '" />';
        }
    }
}


//重写评论
function threadedComments($comments, $options) {
    $commentClass = '';
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    ?>
    <li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
    if ($comments->levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' comment-odd', ' comment-even');
    echo $commentClass;
    ?>">
        <div id="<?php $comments->theId(); ?>" class="comment-item">
            <div class="comment-author">
                <?php $comments->gravatar('40', ''); ?>
                <span class="fn">
            <?php $comments->author(); ?>
            <?php if ($comments->authorId) {
                if ($comments->authorId == $comments->ownerId) {
                    echo "<span class='author-after-text'>[作者]</span>";
                }?>
            <?php }?>

        </span>
        <!-- <div class="comment-meta"> -->
            <small class="comment-meta  ">
                <a class="text-xs text-muted" href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a>
                </small>
                <!-- </div> -->
            </div>


            <div class="comment-content">
                <?php $comments->content(); ?>
            </div>
            <span class="comment-reply"><?php $comments->reply(); ?></span>
        </div>
        <?php if ($comments->children) { ?>
            <div class="comment-children">
                <?php $comments->threadedComments($options); ?>
            </div>
        <?php } ?>
    </li>
<?php }

// 个人卡片超链接列表解析
function winds_procard_item(){

   $json = '{"name":"github","url":"github.com","icon":"fa fa-test"}';

//    var_dump(json_decode($json));
//    var_dump(json_decode($json, true));

// json_decode($json);

$winds_procard_item = json_decode($json, true);
// $winds_procard_item = var_dump(json_decode($json, true));


echo $winds_procard_item["name"];

}

function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
 $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
if(!in_array($cid,$views)){
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    echo $row['views'];
}
