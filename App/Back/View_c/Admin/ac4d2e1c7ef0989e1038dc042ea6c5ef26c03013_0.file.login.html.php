<?php
/* Smarty version 3.1.40, created on 2021-11-13 14:00:50
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Back\View\Admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_618f5492d04088_18722659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac4d2e1c7ef0989e1038dc042ea6c5ef26c03013' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Back\\View\\Admin\\login.html',
      1 => 1636717785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618f5492d04088_18722659 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang='zh-cn'>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <title>个人博客后台登陆</title>
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
<div class="container">
    <div class="line">
        <div class="xs6 xm4 xs3-move xm4-move">
            <br/><br>
            <div class="media media-y">
                <a href="#" target="_blank"><img src="<?php echo (defined('IMAGES_DIR') ? constant('IMAGES_DIR') : null);?>
/logo.png" class="radius" alt="后台管理系统"/></a>
            </div>
            <br><br>
            <form action="index.php?p=Back&c=Admin&a=check" method="POST">
            <div class="panel">
                <div class="panel-head">
                    <strong>登录个人博客后台管理系统</strong>
                </div>
                <div class="panel-body" style="padding:30px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input" name="admin_name" placeholder="登录账号" data-validate="required:请填写账号,length#>=5:账号长度不符合要求"/>
                            <span class="icon icon-key"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input" name="admin_pass" placeholder="登录密码" data-validate="required:请填写密码,length#>=8:密码长度不符合要求"/>
                            <span class="icon icon-key"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input" name="passcode" placeholder="请填写右侧的验证码" data-validate="required:请填写右侧的验证码"/>
                            <img src="index.php?p=Back&c=Admin&a=captcha" onclick="this.src='index.php?p=Back&c=Admin&a=captcha&n='+Math.random()" width="80" height="32" class="passcode"/>
                        </div>
                    </div>
                </div>
                <div class="panel-foot text-center"><button class="button button-block bg-main text-big">立即登录后台</button></div>
            </div>
            <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">MVC框架</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html><?php }
}
