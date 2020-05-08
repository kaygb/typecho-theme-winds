<?php
/** 
 * 文章归档
 *
 * @package custom
 *  
 * @author      风也
 * @version     2020-05-08 1.0
 * 
*/ 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    $this->need('inc/head.php');     // 头文件
    $this->need('inc/header.php');   // 导航栏

?>
    <div class="wrapper container narrow">
        <div class="tag-cloud yue float-up">
            <h2>Tags</h2>
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=count&ignoreZeroCount=1&desc=1&limit=50')->to($tags); ?>
            <?php if($tags->have()): ?>
            <?php while ($tags->next()): ?>
                <a href="<?php $tags->permalink(); ?>" rel="tag" class="tag-item" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a>
            <?php endwhile; ?>
            <?php else: ?>
                <?php echo('还没有标签哦～'); ?>
            <?php endif; ?>
        </div>
        <div>
<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->parse('<li>{year}-{month}-{day} : <a href="{permalink}">{title}</a></li>'); ?>
</div>

    </div>
<?php
    // $this->need('inc/posts.php');  // 首页文章列表
    $this->need('inc/footer.php');     // 底部栏
?>
