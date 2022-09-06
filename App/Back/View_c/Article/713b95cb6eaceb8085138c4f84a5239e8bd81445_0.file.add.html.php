<?php
/* Smarty version 3.1.40, created on 2021-11-20 12:17:32
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Back\View\Article\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619876dccc5e53_87944644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '713b95cb6eaceb8085138c4f84a5239e8bd81445' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Back\\View\\Article\\add.html',
      1 => 1487496144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_619876dccc5e53_87944644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript" src='/App/Back/Public/ckeditor/ckeditor.js'><?php echo '</script'; ?>
>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>文章管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">添加文章</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="POST" class="form-x" action="index.php?p=Back&c=Article&a=dealAdd" enctype="multipart/form-data">
          <div class="form-group">
            <div class="label">
              <label for="sitename">文章标题</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="title" name="title" size="50" placeholder="文章标题" data-validate="required:请填写您的文章标题" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="logo">缩略图</label>
            </div>
            <div class="field"> <a class="button input-file" href="javascript:void(0);">上传文件
              <input size="100" type="file" name="thumb" data-validate="required:请选择上传文件,regexp#.+.(jpg|jpeg|png|gif)$:只能上传jpg|gif|png格式文件" />
              </a> </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">文章作者</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="author" name="author" size="50" placeholder="请填写文章作者" data-validate="required:请填写文章作者" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="sitename">所属类别</label>
            </div>
            <div class="field">
              <select name="cate_id" class="select">
				      <option value="">请选择类别</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cateInfo']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"><?php echo preg_replace('!^!m',str_repeat('-',(5*$_smarty_tpl->tpl_vars['row']->value['level'])),$_smarty_tpl->tpl_vars['row']->value['cate_name']);?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">文章描述</label>
            </div>
            <div class="field">
              <textarea name="art_desc" class="input" rows="2" cols="50" placeholder="请填写文章描述" data-validate="required:请填写文章描述"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">文章内容</label>
            </div>
            <div class="field">
              <textarea name="content" id="ckeditor" class="input" rows="8" cols="50" placeholder="请填写文章内容" data-validate="required:请填写文章内容"></textarea>
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
