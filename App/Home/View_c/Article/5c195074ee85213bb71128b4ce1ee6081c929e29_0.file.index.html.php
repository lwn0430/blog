<?php
/* Smarty version 3.1.40, created on 2021-11-19 10:49:48
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Home\View\Article\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619710cc67c335_97724956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c195074ee85213bb71128b4ce1ee6081c929e29' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Home\\View\\Article\\index.html',
      1 => 1487842012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/meta.html' => 1,
    'file:../Public/header.html' => 1,
    'file:../Public/aside.html' => 1,
  ),
),false)) {
function content_619710cc67c335_97724956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\Vendor\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php $_smarty_tpl->_subTemplateRender('file:../Public/meta.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/base.css" rel="stylesheet">
<link href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/style.css" rel="stylesheet">
<link href="<?php echo (defined('CSS_DIR') ? constant('CSS_DIR') : null);?>
/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="<?php echo (defined('JS_DIR') ? constant('JS_DIR') : null);?>
/modernizr.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>
<body>
<div class="ibody">
  <?php $_smarty_tpl->_subTemplateRender('file:../Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <article>
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'row', false, 'key');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
    ><a href="index.php?p=Home&c=Article&a=index&cate_id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </h2>
    <div class="bloglist">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artInfo']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
      <div class="newblog">
        <ul>
          <h3><a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></h3>
          <div class="autor"><span>作者：<?php echo $_smarty_tpl->tpl_vars['row']->value['author'];?>
</span><span>分类：[<a href="/"><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</a>]</span><span>浏览（<a href="/"><?php echo $_smarty_tpl->tpl_vars['row']->value['hits'];?>
</a>）</span></div>
          <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['row']->value['content']),100,'...');?>
<a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
" target="_blank" class="readmore">全文</a></p>
        </ul>
        <figure><img src="/Uploads/thumb/<?php echo $_smarty_tpl->tpl_vars['row']->value['thumb'];?>
" ></figure>
        <div class="dateview"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['addtime'],'%Y-%m-%d');?>
</div>
      </div>
      <?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
      <div class="newblog">
      	该分类下暂无文章
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="page"><?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>
</div>
  </article>
  <?php $_smarty_tpl->_subTemplateRender('file:../Public/aside.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '<script'; ?>
 src="<?php echo (defined('JS_DIR') ? constant('JS_DIR') : null);?>
/silder.js"><?php echo '</script'; ?>
>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }
}
