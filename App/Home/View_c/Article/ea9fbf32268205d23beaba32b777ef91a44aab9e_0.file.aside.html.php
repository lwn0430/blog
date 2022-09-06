<?php
/* Smarty version 3.1.40, created on 2021-11-19 10:49:48
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Home\View\Public\aside.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619710cc959b53_60983691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea9fbf32268205d23beaba32b777ef91a44aab9e' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Home\\View\\Public\\aside.html',
      1 => 1577274440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619710cc959b53_60983691 (Smarty_Internal_Template $_smarty_tpl) {
?>  <aside>
    <div class="rnav">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subCate']->value, 'row', false, 'key');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
      <li class="rnav<?php echo $_smarty_tpl->tpl_vars['key']->value%4+1;?>
 "><a href="index.php?p=Home&c=Article&a=index&cate_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</a></li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="ph_news">
      <h2>
        <p>点击排行</p>
      </h2>
      <ul class="ph_n">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortByHits']->value, 'row', false, NULL, 'n1', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['iteration']++;
?>
          <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['iteration'] : null) <= 3) {?>      
        <li><span class="num<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['iteration'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['iteration'] : null);?>
</span><a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
          <?php } else { ?>
          <li><span><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['iteration'] : null);?>
</span><a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
      <h2>
        <p>栏目推荐</p>
      </h2>
      <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortByRecommend']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
        <li><a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
      <h2>
        <p>最新评论</p>
      </h2>
      <ul class="pl_n">
        <dl>
          <dt><img src="<?php echo (defined('IMAGES_DIR') ? constant('IMAGES_DIR') : null);?>
/s8.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo (defined('IMAGES_DIR') ? constant('IMAGES_DIR') : null);?>
/s7.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo (defined('IMAGES_DIR') ? constant('IMAGES_DIR') : null);?>
/s6.jpg"> </dt>
          <dt> </dt>
          <dd>小林博客
            <time>8月7日</time>
          </dd>
          <dd><a href="/">博客色彩丰富，很是好看</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo (defined('IMAGES_DIR') ? constant('IMAGES_DIR') : null);?>
/003.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo (defined('IMAGES_DIR') ? constant('IMAGES_DIR') : null);?>
/002.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
      </ul>
      <h2>
        <p>最近访客</p>
        <ul>
          <img src="<?php echo (defined('IMAGES_DIR') ? constant('IMAGES_DIR') : null);?>
/vis.jpg"><!-- 直接使用“多说”插件的调用代码 -->
        </ul>
      </h2>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">ZAFU</a></p>
        <p>浙ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside><?php }
}
