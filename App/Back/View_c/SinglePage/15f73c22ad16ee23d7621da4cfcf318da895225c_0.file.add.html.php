<?php
/* Smarty version 3.1.40, created on 2021-11-20 21:45:48
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Back\View\SinglePage\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6198fc0cc900c9_41396024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15f73c22ad16ee23d7621da4cfcf318da895225c' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Back\\View\\SinglePage\\add.html',
      1 => 1637415946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_6198fc0cc900c9_41396024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript" src='/App/Back/Public/ckeditor/ckeditor.js'><?php echo '</script'; ?>
>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <a href="index.php?p=Back&c=SinglePage&a=index"><strong>单页管理</strong></a>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">添加单页</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="POST" class="form-x" action="index.php?p=Back&c=SinglePage&a=dealAdd" enctype="multipart/form-data">
          <div class="form-group">
            <div class="label">
              <label for="sitename">单页标题</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="title" name="title" size="50" placeholder="单页标题" data-validate="required:请填写您的单页标题" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">单页内容</label>
            </div>
            <div class="field">
              <textarea name="content" id="ckeditor" class="input" rows="8" cols="50"></textarea>
              <?php echo '<script'; ?>
 type="text/javascript">
                CKEDITOR.replace('ckeditor');
              <?php echo '</script'; ?>
>
            </div>
          </div>
          <div class="form-button">
            <button name="submit" class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div style='height:40px; border-bottom:1px #DDD solid'></div>
  <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>
</body>
</html><?php }
}
