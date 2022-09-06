<?php
/* Smarty version 3.1.40, created on 2021-11-18 15:19:18
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Back\View\Category\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6195fe7699f305_36122312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f4f2d1f4077284bfea1b8ee5d6ba2a151bfc8f9' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Back\\View\\Category\\edit.html',
      1 => 1637048239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_6195fe7699f305_36122312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>分类管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">修改分类</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="POST" class="form-x" action="index.php?p=Back&c=Category&a=dealEdit">
          <div class="form-group">
            <div class="label">
              <label for="sitename">分类名称</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="name" name="cate_name" size="50" placeholder="分类名称" data-validate="required:请填写您的分类名称" value="<?php echo $_smarty_tpl->tpl_vars['cateInfoById']->value['cate_name'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="sitename">所属类别</label>
            </div>
            <div class="field">
              <select class="select" name="cate_pid" >
              	  <option value="0">主类别</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cateInfo']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['artInfoById']->value['cate_pid'] == $_smarty_tpl->tpl_vars['row']->value['cate_id']) {?>selected="selected"<?php }?> ><?php echo preg_replace('!^!m',str_repeat('-',(5*$_smarty_tpl->tpl_vars['row']->value['level'])),$_smarty_tpl->tpl_vars['row']->value['cate_name']);?>
</option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="readme">分类描述</label>
            </div>
            <div class="field">
              <textarea name="cate_desc" class="input" rows="5" cols="50" placeholder="请填写分类描述" data-validate="required:请填写分类描述"><?php echo $_smarty_tpl->tpl_vars['cateInfoById']->value['cate_desc'];?>
</textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">排序</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="sort" name="cate_sort" size="50" placeholder="请填写排序编号" data-validate="required:请填写排序编号" value="<?php echo $_smarty_tpl->tpl_vars['cateInfoById']->value['cate_sort'];?>
" />
            </div>
          </div>
          <div class="form-button">
            <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['cateInfoById']->value['cate_id'];?>
">
            <button class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div style='height:20px; border-bottom:1px #DDD solid'></div>
  <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>
</body>
</html><?php }
}
