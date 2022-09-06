<?php
/* Smarty version 3.1.40, created on 2021-12-15 14:34:12
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Home\View\Public\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b98c64b39a23_47638613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd32fbc59eabd47ec083f7c4fe9ba989c6439af89' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Home\\View\\Public\\header.html',
      1 => 1639550034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b98c64b39a23_47638613 (Smarty_Internal_Template $_smarty_tpl) {
?>  <header>
    <h1>农林之家</h1>
    <h2>给我一个小小的家，农林之家，能挡风遮雨的地方，不必太大...</h2>
    <div class="logo"><a href="/"></a></div>
    <nav id="topnav"><a href="/">首页</a>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['firstCate']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
    <a href="index.php?p=Home&c=Article&a=index&cate_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <a href="index.php?p=Home&c=SinglePage&a=index&page_id=10">关于我</a>
    <?php if ((($tmp = @$_SESSION['user_info']['user_id'])===null||$tmp==='' ? 0 : $tmp) > 0) {?>
    <a style="font-size:12px;margin-left:80px;padding:0" href="index.php?p=Home">欢迎您,<?php echo $_SESSION['user_info']['user_name'];?>
&nbsp;|</a>
    <a style="font-size:12px;padding:0" href="index.php?p=Home&c=User&a=logout">退出</a>
    <?php } else { ?>
    <a style="font-size:12px;margin-left:80px;padding:0" href="index.php?p=Home&c=User&a=login">登录&nbsp;|</a>
    <a style="font-size:12px;padding:0" href="index.php?p=Home&c=User&a=register">注册</a>
    <?php }?>
    </nav>
  </header><?php }
}
