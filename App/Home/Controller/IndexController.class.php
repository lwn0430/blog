<?php 
//前台首页控制器
class IndexController extends PlatformController
{
    public function IndexAction()
    {
        /*  //调用模型
        $category=Factory::M('CategoryModel');
        //获取所有一级分类信息
        $firstCate=$category->getFirstCate();
        //分配变量
        $this->assign('firstCate',$firstCate);    */   
        //调用Article模型
        $article=Factory::M('ArticleModel');
        //获取推荐文章信息
        $recommendArt=$article->getRecommendArt(5);
        //分配变量
        $this->assign('recommendArt',$recommendArt);
        //调用MasterModel获取站长信息
        $master=Factory::M('MasterModel');
        $masterInfo=$master->getMasterInfo();
        //分配变量
        $this->assign('masterInfo',$masterInfo);
        //获取最新文章列表
        $newArt=$article->getNewArt(8);
        //分配变量
        $this->assign('newArt',$newArt);
        //获取最热推荐文章列表
        $rmdArtByHits=$article->getRmdArtByHits(8);
        //分配变量
        $this->assign('rmdArtByHits',$rmdArtByHits);
        //显示输出视图文件
        $this->display('index.html');
    }
}