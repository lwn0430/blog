<?php
/* Smarty version 3.1.40, created on 2021-11-19 12:56:17
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Back\View\Article\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61972e711b7fd8_98079139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30d420c90b8e35b8a778cf1cf5b955fa97e09382' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Back\\View\\Article\\index.html',
      1 => 1637058195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_61972e711b7fd8_98079139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\Vendor\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
>
	//定义页面载入事件
	$(function(){
		//获取btnAdd按钮
		$('#btnAdd').bind('click',function(){
			// 设置“添加文章”链接
			window.location.href = 'index.php?p=Back&c=Article&a=add';
		});
	});
    //定义页面载入事件
    $(function(){
        //获取btnAdd按钮
        $('#btnRecycle').bind('click',function(){
            // 设置“回收站”链接
            window.location.href = 'index.php?p=Back&c=Article&a=recycle';
        });
    });
<?php echo '</script'; ?>
>
<div class="admin">
	<form action="index.php?p=Back&c=Article&a=delAll" method="POST">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>文章列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="art_id[]" value="全选" />
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加文章" />
            <input type="submit" class="button button-small border-yellow"  value="批量删除" onclick=" return confirm('确认全部删除吗?')" />
            <input type="button" id="btnRecycle" class="button button-small border-blue" value="回收站" />
        </div>
        <table class="table table-hover">
        	<tr>
                <th width="45">选择</th>
                <th width="120">所属类别</th>
                <th width="200">文章标题</th>
                <th width="120">点击率</th>
                <th width="180">发布时间</th>
                <th width="100">是否推荐</th>
                <th width="100">操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artInfo']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
            <tr>
                <td><input type="checkbox" name="art_id[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title'],10);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['hits'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['is_recommend'] == '1') {?>
                    <a class="button border-yellow button-little" href="index.php?p=Back&c=Article&a=ifRecommend&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
&is_recommend=<?php echo $_smarty_tpl->tpl_vars['row']->value['is_recommend'];?>
&pageNum=<?php echo (($tmp = @$_GET['pageNum'])===null||$tmp==='' ? 1 : $tmp);?>
">已推荐</a> 
                    <?php } else { ?>
                    <a class="button border-blue button-little" href="index.php?p=Back&c=Article&a=ifRecommend&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
&is_recommend=<?php echo $_smarty_tpl->tpl_vars['row']->value['is_recommend'];?>
&pageNum=<?php echo (($tmp = @$_GET['pageNum'])===null||$tmp==='' ? 1 : $tmp);?>
">未推荐</a> 
                    <?php }?>
                </td>
                <td>
                    <a class="button border-blue button-little" href="index.php?p=Back&c=Article&a=edit&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
">修改</a> 
                    <a class="button border-yellow button-little" href="index.php?p=Back&c=Article&a=del&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
" onclick="return confirm('确认删除吗?')">删除</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
		<div class="panel-foot text-center">
            <?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>

        </div>
    </div>
    </form>
    <br />
    <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>
</body>
</html><?php }
}
