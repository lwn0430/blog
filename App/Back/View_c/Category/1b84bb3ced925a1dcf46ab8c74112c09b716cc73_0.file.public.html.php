<?php
/* Smarty version 3.1.40, created on 2021-11-20 12:28:27
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Back\View\Public\public.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6198796b4255c5_79517345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b84bb3ced925a1dcf46ab8c74112c09b716cc73' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Back\\View\\Public\\public.html',
      1 => 1637297875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6198796b4255c5_79517345 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <title>个人博客后台管理系统</title>
    <link rel="stylesheet" href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/pintuer.css">
    <link rel="stylesheet" href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/admin.css">
    <?php echo '<script'; ?>
 src="<?php echo (defined('JS_DIR') ? constant('JS_DIR') : null);?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo (defined('JS_DIR') ? constant('JS_DIR') : null);?>
/pintuer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo (defined('JS_DIR') ? constant('JS_DIR') : null);?>
/respond.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo (defined('JS_DIR') ? constant('JS_DIR') : null);?>
/admin.js"><?php echo '</script'; ?>
>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon"/>
    <link href="/favicon.ico" rel="bookmark icon"/>
</head>
<body>
    <div class="lefter">
        <div class="logo"><a href="#" target="_blank"><img src="<?php echo (defined('IMAGES_DIR') ? constant('IMAGES_DIR') : null);?>
/logo.png" alt="后台管理系统" /></a></div>
    </div>
    <div class="righter nav-navicon" id="admin-nav">
        <div class="mainer">
            <div class="admin-navbar">
                <span class="float-right">
                    <a class="button button-little bg-main" href="/" target="_blank">前台首页</a>
                    <a class="button button-little bg-yellow" href="index.php?p=Back&c=Admin&a=logout">注销登录</a>
                </span>
                <ul class="nav nav-inline admin-nav">
                    <li class="active"><a href="index.php?p=Back&c=Manage&a=index" class="icon-home">开始</a>
                        <ul>
                            <li><a href="index.php?p=Back&c=Category&a=index">分类管理</a></li>
                            <li><a href="index.php?p=Back&c=Article&a=index">文章管理</a></li>
                            <li><a href="#">评论管理</a></li>
                            <li><a href="#">相册管理</a></li>
                            <li><a href="index.php?p=Back&c=SinglePage&a=index">页面管理</a></li>
                            <li><a href="index.php?p=Back&c=Master&a=index">站长管理</a></li>
                            <li><a href="#">友情链接</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="admin-bread">
                <span>您好,<?php echo $_SESSION['adminInfo']['admin_name'];?>
,欢迎您的光临.</span>
                <ul class="bread">
                    <li><a href="index.php?p=Back&c=Manage&a=index" class="icon-home">开始</a></li>
                    <li>后台首页</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
<?php }
}
