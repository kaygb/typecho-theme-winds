<?php
/** 
 * 友情链接
 *
 * @package custom
 *  
 * @author      风也
 * @version     2020-06-04 1.0
 * 
*/ 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    $this->need('inc/head.php');     // 头文件
    $this->need('inc/header.php');   // 导航栏

?>
<style>
    .board-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    padding-top: 1em;
    margin-left: -15px;
    width: calc(100% + 15px);
}
.board-list .board-item {
    position: relative;
    background: #fff;
    -webkit-box-shadow: 0 0 20px 2px rgba(0,0,0,.1);
    box-shadow: 0 0 20px 2px rgba(0,0,0,.1);
    -webkit-transition: all .3s;
    transition: all .3s;
    overflow: hidden;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-flow: column nowrap;
    flex-flow: column nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    border: none!important;
    margin-left: 15px;
    margin-bottom: 15px;
}
@media screen and (min-width: 768px)
.board-list .board-item {
    width: calc(25% - 15px);
}
.board-list .board-item .board-thumb {
    position: relative;
    width: 100%;
    padding-top: 100%;
}

.board-list .board-item .board-thumb img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    margin: 0;
    padding: 0;
    -webkit-transition: .5s ease-in-out opacity;
    transition: .5s ease-in-out opacity;
}

.board-list .board-item .board-title, .board-list .board-item .board-title a {
    padding: 8px 0!important;
    font-size: 1.2em!important;
    overflow: hidden!important;
    white-space: nowrap!important;
    text-align: center!important;
    color: rgba(0,0,0,.86)!important;
    font-weight: 700!important;
    border: none;
}

</style>

<div class="main container">
    <div class="row">
        <div class="col-mb-12 col-lg-8 main-posts-content" id="main" role="main">
            <article class="post  wbg-white" itemscope itemtype="http://schema.org/BlogPosting">
                <div id="post-content" class="post-content" itemprop="articleBody">


                    <h2>全站链接</h2>

                    <div class="board-list link-list">

                        <?php 
                        $mypattern1 = "
                        <a href=\"{url}\" target=\"_blank\" class=\"board-item link-item\">
                            <div class=\"board-thumb loaded\" data-thumb=\"{image}\">
                                <img class=\"lazyload loaded\" data-src=\"{image}\" src=\"{image}\">
                            </div>
                            <div class=\"board-title\">{name}</div>
                        </a>";


                        // $mypattern1 = "<li data-original-title=\"{title}\" data-toggle=\"tooltip\" data-placement=\"top\"><a href=\"{url}\" target=\"_blank\"><span>{name}</span></a></li>";
                        Links_Plugin::output($mypattern1, 0, "ten");
                        ?>
                    </div>
                    
                    <div class="board-list link-list">
                    <h2>内页链接</h2>
                    <?php 
                        Links_Plugin::output($mypattern1, 0, "one");
                        // Links_Plugin::output($mypattern2=NULL, $links_num=0, $sort="one");
                        ?>
                        </div>
                    <h2>异常链接</h2>
                    
                    <div class="board-list link-list">
                    <?php 
                    Links_Plugin::output($mypattern1, 0, "nogood");
                        // Links_Plugin::output($mypattern3=NULL, $links_num=0, $sort="nogood");
                        ?>
                        
                    </div>
                    <?php $this->content(); ?>
                </div>
            </article>
        </div><!-- end #main-->
        <?php $this->need('inc/sidebar.php'); ?>
    </div>
</div>

<?php $this->need('inc/footer.php');?>
