<?php
/* Smarty version 3.1.40, created on 2021-11-19 13:16:28
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Back\View\SinglePage\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6197332c8ca5d2_39680811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5657f95a57ce8f75ddbd9bf6c5a42272890cd0f' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Back\\View\\SinglePage\\index.html',
      1 => 1487838000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_6197332c8ca5d2_39680811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\Vendor\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
>
	//定义页面载入事件
	$(function(){
		//获取btnAdd按钮
		$('#btnAdd').bind('click',function(){
			// 设置“添加文章”链接
			window.location.href = 'index.php?p=Back&c=SinglePage&a=add';
		});
	});
<?php echo '</script'; ?>
>
<div class="admin">
	<form action="index.php?p=Back&c=SinglePage&a=delAll" method="POST">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>单页列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="page_id[]" value="全选" />
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加单页" />
            <input type="submit" class="button button-small border-yellow"  value="批量删除" onclick=" return confirm('确认全部删除吗?')" />
        </div>
        <table class="table table-hover">
        	<tr>
                <th width="45">选择</th>
                <th width="120">单页ID</th>
                <th width="200">单页标题</th>
                <th width="100">操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageInfo']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
            <tr>
                <td><input type="checkbox" name="page_id[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title'],10);?>
</td>
                <td>
                    <a class="button border-blue button-little" href="index.php?p=Back&c=SinglePage&a=edit&page_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
">修改</a> 
                    <a class="button border-yellow button-little" href="index.php?p=Back&c=SinglePage&a=del&page_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
" onclick="return confirm('确认删除吗?')">删除</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    </form>
    <br />
    <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>
</body>
</html><?php }
}
