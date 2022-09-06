<?php
/* Smarty version 3.1.40, created on 2021-11-20 22:48:53
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Back\View\SinglePage\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61990ad55b8be3_32697332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e0d72da57dc454dca4037ca1a84aa8cef46a767' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Back\\View\\SinglePage\\edit.html',
      1 => 1637419678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_61990ad55b8be3_32697332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript" src='/App/Back/Public/ckeditor/ckeditor.js'><?php echo '</script'; ?>
>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <a href="index.php?p=Back&c=SinglePage&a=index"><strong>单页管理</strong></a>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">修改单页</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="POST" class="form-x" action="index.php?p=Back&c=SinglePage&a=dealEdit" enctype="multipart/form-data">
          <div class="form-group">
            <div class="label">
              <label for="sitename">单页标题</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="title" name="title" size="50" placeholder="单页标题" data-validate="required:请填写您的单页标题" value="<?php echo $_smarty_tpl->tpl_vars['pageInfoById']->value['title'];?>
"/>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">单页内容</label>
            </div>
            <div class="field">
              <textarea name="content" id="ckeditor" class="input" rows="8" cols="50"><?php echo $_smarty_tpl->tpl_vars['pageInfoById']->value['content'];?>
</textarea>
              <?php echo '<script'; ?>
 type="text/javascript">
                CKEDITOR.replace('ckeditor');
              <?php echo '</script'; ?>
>
            </div>
          </div>
          <div class="form-button">
            <input type="hidden" name="page_id" value="<?php echo $_smarty_tpl->tpl_vars['pageInfoById']->value['page_id'];?>
">
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
