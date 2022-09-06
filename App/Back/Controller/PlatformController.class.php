<?php 
//23.后台的平台控制器
class PlatformController extends Controller{
    //判断后台管理员是否登录防止用户翻墙
    protected function checkLogin()
    {
        //先列出不需要登录验证的动作列表
        $no_need=array(
            //控制器名=>该控制器下不需要验证的动作列表
            'Admin'=>array('login','check','captcha'),
        );
        if(isset($no_need[CONTROLLER])&&in_array(ACTION,$no_need[CONTROLLER]))
        {
            //说明当前控制器下的方法不需要验证
            return ;
        }
        @session_start();
        if(!isset($_SESSION['adminInfo']))
        {
            //说明还没有登录，跳转到登录页面
            $this->jump('index.php?p=Back&c=Admin&a=login',':(请您先登录!');
        }
    }
    //实例化其他控制器类的时候就自动执行加以判断
    public function __construct()
    {
        //先显示的调用父类构造方法
        parent::__construct();
        //判断后台管理员是否登录防止用户翻墙
        $this->checkLogin();
    }
}