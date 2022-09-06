<?php
//后台管理平台控制器
class ManageController extends PlatformController
{
    //首页动作
    public function indexAction()
    {
        //首页动作
        //echo '登录成功！这里是后台管理平台!';
            $this->display('index.html');
    }
}