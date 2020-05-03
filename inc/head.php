<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php $this->options->logoUrl(); ?>" mce_href="<?php $this->options->logoUrl(); ?>" type="image/x-icon">
    <title>
    <?php if($this->is('index'))
    {
        $this->options->title(); _e(' - ');$this->options->description();
    }
    // elseif($this->_currentPage){
    //     _e('第 ');echo $this->_currentPage;_e(' 页 - ');$this->options->title(); _e(' - ');$this->options->description();
    // }
    
    else{
        $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); 
        $this->options->title(); 
    }
    ?>
        
    </title>

    <!-- 新 Bootstrap4 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- font-awsome cdn -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/5.13.0/css/all.min.css">

    <!-- 布局·WINDS样式 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/header.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/winds.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/layout.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/sidebar.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/post.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/footer.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/keyframe.css'); ?>">
<!-- highlightjs -->
<link rel="stylesheet"
      href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.18.1/build/styles/atom-one-dark.min.css">
<!-- fancybox -->
      <link rel="stylesheet" href="https://cdn.staticfile.org/fancybox/3.5.7/jquery.fancybox.min.css">

      <!-- google-fonts -->
      <link href='https://fonts.loli.net/css?family=Open+Sans' rel='stylesheet'>

    <!-- 测试-禁用缓存 -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<?php if($this->is('single')):?>
        <div class="bg-blur"><h1 class="main-title container"><?php $this->title(); ?></h1> <img class="lazy-img"  data-original="<?php 
            if($this->fields->defaultBanner !=""){
                echo $this->fields->defaultBanner;
            }else{
                $this->options->bgImgUrl();
            }
            ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" alt="" srcset=""></div>
        <?php else:?>
            <div class="bg-blur">
                <h1 class="main-title"><?php $this->options->siteName(); ?></h1>    
                <img class="lazy-img"  data-original="<?php $this->options->bgImgUrl(); ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" alt="" srcset="">
            </div>
            

<?php endif    ?>




    
    
