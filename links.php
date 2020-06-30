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
.link-content{
    padding:20px;
}
.link-item img{
    width:100%;
    padding:0;
    margin:0;
}
.link-item{
    text-align:center;
    display:block;
    /* border:2px solid #eee; */

}
.link-item:hover{
    -webkit-animation: jianyin 1s;
    animation: jianyin 1s;
    background: #ff9ff3;
    color:  #576574;
}
.link-name{
    color:#333;
    /* padding:10px; */
    line-height:3em;
}
</style>

<div class="main container">
    <div class="row">
        <div class="col-mb-12 col-lg-8 main-posts-content" id="main" role="main">
            <article class="post  wbg-white" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="post-head">
                    <?php $this->need('inc/post-meta.php');?>
                </div>
                <div id="post-content" class="post-content" itemprop="articleBody">


                    <h2>全站链接</h2>

                    <div class="link-list row">

                        <?php 
                        $mypattern1 = "
                        <div class=\"link-content col-md-3 \">
                        <a href=\"{url}\" target=\"_blank\" class=\"link-item\">
                            <div class=\"link-thumb\">
                                <img class=\"lazyload\" data-original=\"{image}\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=\">
                            </div>
                            <div class=\"link-name\">{name}</div>
                        </a>
                        </div>
                        ";


                        // $mypattern1 = "<li data-original-title=\"{title}\" data-toggle=\"tooltip\" data-placement=\"top\"><a href=\"{url}\" target=\"_blank\"><span>{name}</span></a></li>";
                        Links_Plugin::output($mypattern1, 0, "ten");
                        ?>
                    </div>
                    <h2>内页链接</h2>
                    <div class="link-list row">

                        <?php 
                        Links_Plugin::output($mypattern1, 0, "one");

                        ?>
                        </div>
                    <h2>异常链接</h2>
                    
                    <div class="link-list row">
                        <?php 
                                                $mypattern2 = "
                                                <div class=\"link-content col-md-3 \">
                        <a href=\"{url}\" target=\"_blank\" rel=\"nofollow\" class=\"link-item\">
                            <div class=\"link-thumb\">
                                <img class=\"lazyload\" data-original=\"{image}\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABS2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSJyIj8+IEmuOgAAAA1JREFUCJljePfx038ACXMD0ZVlJAYAAAAASUVORK5CYII=\">
                            </div>
                            <div class=\"link-name\">{name}</div>
                        </a>
                        </div>";
                        Links_Plugin::output($mypattern2, 0, "nogood");

                            ?>
                        
                    </div>
                    <?php $this->content(); ?>
                </div>
            </article>
            <?php $this->need('inc/comments.php'); ?>
        </div><!-- end #main-->
        <?php $this->need('inc/sidebar.php'); ?>
    </div>
</div>

<?php $this->need('inc/footer.php');?>
