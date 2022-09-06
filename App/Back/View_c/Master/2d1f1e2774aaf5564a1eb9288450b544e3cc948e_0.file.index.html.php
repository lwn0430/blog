<?php
/* Smarty version 3.1.40, created on 2021-11-18 19:38:59
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Back\View\Master\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61963b538d87f3_18524069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d1f1e2774aaf5564a1eb9288450b544e3cc948e' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Back\\View\\Master\\index.html',
      1 => 1576733176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_61963b538d87f3_18524069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>站长管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">站长信息</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="post" class="form-x" action="index.php?p=Back&c=Master&a=edit" >
          <div class="form-group">
            <div class="label">
              <label for="sitename">网名</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="nickname" name="nickname" size="50" placeholder="站长网名" data-validate="required:请填写站长网名" value="<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['nickname'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">职业</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="job" name="job" size="50" placeholder="请填写您的职业" data-validate="required:请填写您的职业" value="<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['job'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">籍贯</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="address" name="home" size="50" placeholder="请填写您的籍贯" data-validate="required:请填写您的籍贯" value="<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['home'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">电话</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="tel" name="tel" size="50" placeholder="请填写您的电话" data-validate="required:请填写您的电话" value="<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['tel'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">邮箱</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="email" name="email" size="50" placeholder="请填写您的邮箱" data-validate="required:请填写您的邮箱" value="<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['email'];?>
" />
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
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建   来源:<a href="http://#/" target="_blank">博客</a></p>
</div><?php }
}
