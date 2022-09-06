<?php
//前台平台控制器
class PlatformController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->initFirstCateInfo();
        $this->initVars();
        $this->initSession();
    }
    //49.分配导航条中的一级分类列表信息
    public function initFirstCateInfo()
    {
        //调用Category模型
        $category=Factory::M('CategoryModel');
        //获取所有一级分类信息
        $firstCate=$category->getFirstCate();
        //分配变量
        $this->assign('firstCate',$firstCate);
    }
    //分配meta标签公共数据
    public function initVars()
    {
        $title="刘文浓个人博客";
        $keywords="个人博客，响应式";
        $description="个人博客，响应式，神秘、俏皮";
        //分配变量
        $this->assign('title',$title);
        $this->assign('keywords',$keywords);
        $this->assign('description',$description);
    }
    //在页面显示欢迎信息
    public function initSession()
    {
        @session_start();
    }
}