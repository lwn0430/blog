<?php
/* Smarty version 3.1.40, created on 2021-11-20 11:19:31
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Home\View\Article\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61986943932c21_86336377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '755f91c1809ce63572699c350802f4d301be871d' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Home\\View\\Article\\show.html',
      1 => 1637378365,
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
function content_61986943932c21_86336377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
<style type="text/css">
  .ds-replybox img {
    float:left;
    width:76px;
    height:76px;
  }
  textarea {
    box-shadow: none;
    color: #999;
    height: 54px;
    margin: 0;
    overflow: auto;
    padding: 10px;
    resize: none;
    width: 80%;
    margin-left:10px;
  }
  button {
    margin-top:10px;
    margin-left:85px;
    font-size: 14px;
    font-weight: bold;
    height: 32px;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
    transition: all 0.15s linear 0s;
    width: 100px;
  }
  .otherlink dl {
    display:block;
    width:100%;
    height:65px;
    padding:20px 0;
    border-bottom:1px #DEDEDE solid;
  }
  .otherlink dt {
    float:left;
  }
  .otherlink h3 {
    color:#D23;
  }
  .otherlink h3,.otherlink p {
    line-height:22px;
    text-indent:10px;
  }
  .otherlink .msg {
     color:#333;
  }
  .otherlink .addtime {
     color:#999;
  }
  .logform input {
    width:140px;
    height:30px;
  }
</style>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="js/modernizr.js"><?php echo '</script'; ?>
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
       <div class="index_about">
      <h2 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['artInfoById']->value['title'];?>
</h2>
      <p class="box_c"><span class="d_time">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['artInfoById']->value['addtime'],"%Y-%m-%d");?>
</span><span>编辑：<?php echo $_smarty_tpl->tpl_vars['artInfoById']->value['author'];?>
</span><span>浏览（<?php echo $_smarty_tpl->tpl_vars['artInfoById']->value['hits'];?>
）</span><span>评论（<?php echo $_smarty_tpl->tpl_vars['artInfoById']->value['reply_nums'];?>
）</span></p>
      <ul class="infos">
        <?php echo $_smarty_tpl->tpl_vars['artInfoById']->value['content'];?>

      </ul>
      <div class="nextinfo">
        <p>上一篇：<a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['prev']->value['art_id'])===null||$tmp==='' ? $_GET['art_id'] : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['prev']->value['title'])===null||$tmp==='' ? '已经是第一篇了,没有了!' : $tmp);?>
</a></p>
        <p>下一篇：<a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['next']->value['art_id'])===null||$tmp==='' ? $_GET['art_id'] : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['next']->value['title'])===null||$tmp==='' ? '已经是最后一篇了,没有了!' : $tmp);?>
</a></p>
      </div>
      <div style="clear:both; height:10px;"></div>
      <div class="otherlink">
        <h2>评论列表</h2>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cmtInfos']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
        <dl>
          <dt>
            <img width='50' height='50' src='/Uploads/user/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_image'];?>
'>
          </dt>
          <dd>
            <h3>
        <?php echo $_smarty_tpl->tpl_vars['row']->value['cmt_user'];?>

            </h3>
            <p class='msg'><?php echo $_smarty_tpl->tpl_vars['row']->value['cmt_content'];?>
</p>
            <p class='addtime'>发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['cmt_time'],"%Y-%m-%d %T");?>
</p>
          </dd>
        </dl>
        <?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
        <p>暂无任何评论,快来抢沙发吧!</p>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
    <div style="clear:both; height:10px;"></div>
      <div class="otherlink">
        <h2>发布评论</h2>
      </div>
      <form action="index.php?p=Home&c=Article&a=comment" method="POST">
      <textarea placeholder="说点什么吧…" title="Ctrl+Enter快捷提交" name="content"></textarea>
      <input type="hidden" name="art_id" value="<?php echo $_GET['art_id'];?>
">
      <button type="submit" class="ds-post-button">发布</button></form>
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
