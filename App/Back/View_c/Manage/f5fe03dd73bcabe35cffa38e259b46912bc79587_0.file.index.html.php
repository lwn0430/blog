<?php
/* Smarty version 3.1.40, created on 2021-11-13 14:01:17
  from 'D:\PHP\phpstudy_pro\WWW\blog.\App\Back\View\Manage\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_618f54ad0c5bd7_55507019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5fe03dd73bcabe35cffa38e259b46912bc79587' => 
    array (
      0 => 'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\App\\Back\\View\\Manage\\index.html',
      1 => 1636776275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/public.html' => 1,
  ),
),false)) {
function content_618f54ad0c5bd7_55507019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\PHP\\phpstudy_pro\\WWW\\blog.\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:../Public/public.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="admin">
        <div class="line-big">
            <div class="xm3">
                <div class="panel border-back">
                    <div class="panel-body text-center">
                        <img src="<?php echo (defined('IMAGES_DIR') ? constant('IMAGES_DIR') : null);?>
/face.jpg" width="120" class="radius-circle" /><br>
                    </div>
                    <div class="panel-foot bg-back border-back">
                        您好,<?php echo $_SESSION['adminInfo']['admin_name'];?>
,这是您第<?php echo $_SESSION['adminInfo']['login_nums']+1;?>
次登录,
                        上次登录时间为<?php echo smarty_modifier_date_format($_SESSION['adminInfo']['login_time'],'%Y-%m-%d');?>
,上次登录的IP为<?php echo $_SESSION['adminInfo']['login_ip'];?>

                    </div>
                </div>
                <br>
                <div class="panel">
                    <div class="panel-head"><strong>站点统计</strong></div>
                    <ul class="list-group">
                        <li><span class="float-right badge bg-red">88</span><span class="icon-user">会员</span></li>
                        <li><span class="float-right badge bg-red">828</span><span class="icon-file">文章</span></li>
                        <li><span class="float-right badge bg-red">828</span><span class="icon-shopping-cart">订单</span></li>
                        <li><span class="float-right badge bg-red">828</span><span class="icon-database">数据库</span></li>
                    </ul>
                </div>
            </div>
            <div class="xm9">
                <div class="alert">
                    <div class="alert alert-yellow"><span class="close"></span><strong>提示：</strong>欢迎使用ICFrame框架！</div>
                    <h4>基于ICFrame框架的blog介绍</h4>
                    <p class="text-gray padding-top">该播客系统基于ICFrame框架，高效、简洁……</p>
                    <a target="_blank" class="button bg-dot icon-code" href="#"> 下载示例代码</a> 
                    <a target="_blank" class="button bg-main icon-download" href="#"> 下载ICFrame框架</a> 
                    <a target="_blank" class="button border-main icon-file" href="#"> ICFrame框架使用教程</a>
                </div>
                <div class="panel">
                    <div class="panel-head"><strong>系统信息</strong></div>
                    <table class="table">
                        <tr><th colspan="2">服务器信息</th><th colspan="2">系统信息</th></tr>
                        <tr><td width="110" align="right">操作系统：</td><td><?php echo (defined('PHP_OS') ? constant('PHP_OS') : null);?>
</td><td width="90" align="right">系统开发：</td><td><a href="#" target="_blank">ICFrame框架</a></td></tr>
                        <tr><td align="right">Web服务器：</td><td><?php echo $_SERVER['SERVER_SOFTWARE'];?>
</td><td align="right">主页：</td><td><a href="#" target="_blank">#</a></td></tr>
                        <tr><td align="right">服务器IP：</td><td><?php echo $_SERVER['SERVER_ADDR'];?>
</td><td align="right">演示：</td><td><a href="#" target="_blank">http://www.blog.com</a></td></tr>
                        <tr><td align="right">数据库：</td><td>MySQL</td><td align="right">群交流：</td><td><a href="#" target="_blank">12345678</a> (点击加入)</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html><?php }
}
