<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/main.css'); ?>" />
    <link rel="icon" href="<?php echo $this->options->icon ?>">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/mdui/0.4.1/css/mdui.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//s.uvwvu.xyz/live2d/waifu.css"/>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
    <script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
    <script src="https://cdn.bootcss.com/mdui/0.4.1/js/mdui.min.js"></script>
    <?php $this->header(); ?>
</head>
<body>
<div class="pjax-load">
    <img src="<?php $this->options->themeUrl('img/load.gif'); ?>">
    <h3 style="margin-top: 15px;color: white;">Loading...</h3>
</div>
<header>
    <div id="header">
        <a id="wsTitle" class="mdui-text-truncate" href="<?php $this->options->siteUrl(); ?>" style="flex: 1;background-image: url('<?php $this->options->hIcon() ?>')">
            <?php $this->options->title() ?>
        </a>
        <form style="height: 100%">
            <input type="text" style="display:none">
            <input type="text" autocomplete="off" name="s" placeholder="回车进行搜索" id="search" />
        </form>
        <div class="header-tool">
            <?php if($this->user->hasLogin()): ?>
            <?php else: ?>
            <a href="<?php $this->options->adminUrl(); ?>">
                <button class="loginBtn mdui-ripple">登陆</button>
            </a>
            <?php endif; ?>
            <button class="noColorBtn mdui-ripple searchBtn">
                <i class="mdui-icon material-icons">search</i>
            </button>
            <button class="noColorBtn mdui-ripple sidebarControlBtn">
                <i class="mdui-icon material-icons">menu</i>
            </button>
        </div>
    </div>
    <script>
        switchNow = 0;
        var mh = $('.mobie-head');
        $('#open-hMenu').click(function () {
            if (switchNow == 0){
                an_Move('header','0','160px','400ms');
                animateFor('#controlBtn','controlBtnSB','controlBtnSS');
                $('#pull_down_btn').attr('class', 'fa fa-chevron-up fa-lg');
                mh.css({display: 'none'});
                $('#open-Vmenu').css({display : 'none'});
                switchNow = 1;
            }else {
                an_Move('header','0','0','400ms');
                animateFor('#controlBtn','controlBtnSS','controlBtnSB');
                $('#pull_down_btn').attr('class', 'fa fa-chevron-down fa-lg');
                mh.css({display: 'block'});
                $('#open-Vmenu').css({display : 'inline-block'});
                switchNow = 0;
            }
        });
    </script>
</header>
<div class="bg-ovo"></div>

<script>
  logo = '<?php echo $this->options->logo ?>';
    bgurl = '<?php echo $this->options->bgUrl ?>';
    if (bgurl == ''){
        bgurl = '/usr/themes/wanna/img/bg.jpg';
    }
    if (logo == ''){
        logo = '/usr/themes/wanna/img/icon.jpg'
    }
  $('.bg-ovo').css({
      backgroundImage : "url("+bgurl+")"
  });
</script>
<div id="body">
