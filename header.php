<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php $this->options->charset(); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>
    <?php 
        $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - ');
        $this->options->title();
     ?>
</title>

<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" href="<?php $this->options->adminUrl('css/normalize.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->adminUrl('css/grid.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

<style>
p#back-to-top{  
    position:fixed;  
    display:none;  
    bottom:20%;  
    right:5%;  
}  
p#back-to-top a{  
    text-align:center;  
    text-decoration:none;  
    color:#d1d1d1;  
    display:block;  
    width:64px;  
    -moz-transition:color 1s;  
    -webkit-transition:color 1s;  
    -o-transition:color 1s;  
}  
p#back-to-top a:hover{  
    color:#979797;  
}  
p#back-to-top a span{  
    background:transparent url("<?php $_SERVER['SERVER_NAME'] ?>/usr/themes/Eason/img/top.png") no-repeat -25px -290px;  
    border-radius:6px;  
    display:block;  
    height:64px;  
    width:56px;  
    margin-bottom:5px;  
    -moz-transition:background 1s;  
    -webkit-transition:background 1s;  
    -o-transition:background 1s;  
}  
#back-to-top a:hover span{  
    background:transparent url("<?php $_SERVER['SERVER_NAME'] ?>/usr/themes/Eason/img/top.png") no-repeat -25px -290px;  
}
</style> 

<!--[if lt IE 9]>
    <script src="<?php $this->options->adminUrl('js/html5shiv.js'); ?>"></script>
    <script src="<?php $this->options->adminUrl('js/respond.js'); ?>"></script>
<![endif]-->

<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>
<body>
<div id="main-container">
<p id="back-to-top">
    <a href="#top">
        <img src="<?php $_SERVER['SERVER_NAME'] ?>/usr/themes/Eason/img/top.png" />
    </a>
</p>
<!--[if lt IE 8]>
    <div class="browsehappy"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div class="topbar col-mb-12 col-12">

    <div class="top-version">
    <?php HelloWorld_Plugin::render(); ?> 
    </div>

    <div id="search-box">
        <form id="search" method="post" action="./" role="search">
            <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
            <input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
            <button type="submit" class="submit"><?php _e('搜索'); ?></button>
        </form>
    </div>
</div>
<div id="header_padding">
<header id="header" class="clearfix">
<div class="container">
    <div class="colgroup">
    <div class="site-name col-mb-12 col-9">
        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
            <?php if ($this->options->logoUrl): ?>
            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
            <?php endif; ?>
            <?php $this->options->title() ?>
        </a>
        <br />      	    
        <p class="description"><?php $this->options->description() ?></p>
    </div>
    
    <div class="col-mb-12">
    <div class="text-shadow">
        <nav id="nav-menu" class="clearfix" role="navigation">
            <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
            <a<?php if($this->is('category','tech')): ?> class="current"<?php endif; ?> href="/category/tech/"><?php _e('技术'); ?></a>
            <a<?php if($this->is('category','diary')): ?> class="current"<?php endif; ?> href="/category/diary/"><?php _e('随笔'); ?></a>
            <a<?php if($this->is('category','favor')): ?> class="current"<?php endif; ?> href="/category/favor"><?php _e('收藏'); ?></a>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
            <?php endwhile; ?>
        </nav>
    </div>
    </div>
</div>
</div>      <!-- end .colgroup -->
        
</header><!-- end #header -->
</div>
<div id="body">
    <div class="container">
        <div class="colgroup">

    
    