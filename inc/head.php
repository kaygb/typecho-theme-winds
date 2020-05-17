<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!--
      ___                       ___          _____          ___     
     /__/\        ___          /__/\        /  /::\        /  /\    
    _\_ \:\      /  /\         \  \:\      /  /:/\:\      /  /:/_   
   /__/\ \:\    /  /:/          \  \:\    /  /:/  \:\    /  /:/ /\  
  _\_ \:\ \:\  /__/::\      _____\__\:\  /__/:/ \__\:|  /  /:/ /::\ 
 /__/\ \:\ \:\ \__\/\:\__  /__/::::::::\ \  \:\ /  /:/ /__/:/ /:/\:\
 \  \:\ \:\/:/    \  \:\/\ \  \:\~~\~~\/  \  \:\  /:/  \  \:\/:/~/:/
  \  \:\ \::/      \__\::/  \  \:\  ~~~    \  \:\/:/    \  \::/ /:/ 
   \  \:\/:/       /__/:/    \  \:\         \  \::/      \__\/ /:/  
    \  \::/        \__\/      \  \:\         \__\/         /__/:/   
     \__\/                     \__\/                       \__\/    
-->
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php $this->options->logoUrl(); ?>" mce_href="<?php $this->options->logoUrl(); ?>" type="image/x-icon">
    <meta name="theme-color" content="#000" />
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
    <meta itemprop="description" name="description" content="<?php $this->excerpt(30, '...'); ?>"/> 
    <meta itemprop="name" content="<?php if($this->is('index')) { $this->options->title(); _e(' - ');$this->options->description(); } // elseif($this->_currentPage){ // _e('第 ');echo $this->_currentPage;_e(' 页 - ');$this->options->title(); _e(' - ');$this->options->description(); // } else{ $this->archiveTitle(array( 'category' => _t('分类 %s 下的文章'), 'search' => _t('包含关键字 %s 的文章'), 'tag' => _t('标签 %s 下的文章'), 'author' => _t('%s 发布的文章') ), '', ' - '); $this->options->title(); } ?>"/>
    <meta id="image" itemprop="image" content="<?php $this->options->logoUrl(); ?>"/>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/header.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/winds.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/layout.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/sidebar.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/post.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/footer.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/keyframe.css'); ?>">
    <link rel="stylesheet"
      href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.18.1/build/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/fancybox/3.5.7/jquery.fancybox.min.css">
<!-- <link rel="stylesheet" href="https://cdn.staticfile.org/jquery.tocify/1.9.0/stylesheets/jquery.tocify.min.css"> -->
<!-- autoToc -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kaygb/blogMenu@master/css/jquery.autoMenu.css"> -->
      <!-- google-fonts -->
      <!-- <link href='https://fonts.loli.net/css?family=Open+Sans' rel='stylesheet'> -->
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<?php $this->need('inc/banner.php');?>






    
    
