<?php
//站长管理控制器
class MasterController extends PlatformController
{
    //显示站长信息
    public function IndexAction()
    {
        //调用模型
        $master=Factory::M('MasterModel');
        $masterInfo=$master->getMasterInfo();
        //分配变量
        $this->assign('masterInfo',$masterInfo);
        //输出视图文件
        $this->display('index.html');
    }
    //修改站长信息
    public function editAction()
    {
        //接收表单数据
        $masterInfo=array();
        $masterInfo['nickname']=$_POST['nickname'];
        $masterInfo['job']=$_POST['job'];
        $masterInfo['home']=$_POST['home'];
        $masterInfo['tel']=$_POST['tel'];
        $masterInfo['email']=$_POST['email'];
        //验证数据
        if(empty($masterInfo['nickname']) || empty($masterInfo['job']) || empty($masterInfo['home']) || empty($masterInfo['tel']) || empty($masterInfo['email']))
        {
            $this->jump('index.php?p=Back&c=Master&a=index',':(信息填写不完整');
        }
        //调用模型，更新
        $master=Factory::M('MasterModel');
        $result=$master->updateMasterInfo($masterInfo);
        if($result)
        {
            $this->jump('index.php?p=Back&c=Master&a=index',':)更改成功!');
        }else{
            $this->jump('index.php?p=Back&c=Master&a=index',':(发生未知错误，更改失败!');
        }
    }
}