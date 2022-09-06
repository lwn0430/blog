<?php
//后台bg_article表操作模型
class ArticleModel extends Model
{
    //获取推荐文章的列表
    public function getRecommendArt($length)
    {
        $sql="select a.*,c.cate_name from bg_article as a left join bg_category as c on a.cate_id=c.cate_id where is_del='0' and is_recommend='1' order by addtime desc limit $length";
        return $this->dao->fetchAll($sql);
    }
    //获取最新文章列表
    public function getNewArt($length)
    {
        //只需要查询文章id和文章标题
        $sql="select art_id,title from bg_article where is_del='0' order by addtime desc limit $length";
        return $this->dao->fetchAll($sql);
    }
    //获取最热门推荐文章列表
    public function getRmdArtByHits($length)
    {
        //只需要查询文章id和文章标题
        $sql="select art_id,title from bg_article where is_del='0' and is_recommend='1' order by hits desc limit $length";
        return $this->dao->fetchAll($sql);
    }
    //49.
    public function getArtInfo($cate_id)
    {
        //先获取该类别下所有的子类别的id号
        $ids=$this->getAllSubIds($cate_id);
        //再拼凑出当前分类的id号
        $ids.=$cate_id;
        //计算偏移量
        $pageNum=isset($_GET['pageNum'])?$_GET['pageNum']:1;
        $offset=($pageNum-1)*9;
        $sql="select a.*,c.cate_name from bg_article as a left join bg_category as c on a.cate_id=c.cate_id where is_del='0' and a.cate_id in($ids) limit $offset,9";
        return $this->dao->fetchAll($sql);
    }
    //根据当前分类号获取其所有的子分类号
    private function getAllSubIds($cate_id)
    {
        $sql="select cate_id from bg_category where cate_pid=$cate_id";
        $id=$this->dao->fetchAll($sql);
        static $ids='';
        foreach($id as $row)
        {
            $ids.=$row['cate_id'].',';
            $this->getAllSubIds($row['cate_id']);
        }
        return $ids;
    }
    //获取当前分类及其子分类下所有文章的记录数
    public function getRowCount($cate_id)
    {
        //先获取所有的子分类号
        $ids=$this->getAllSubIds($cate_id);
        //再拼凑当前分类的id号
        $ids.=$cate_id;
        $sql="select count(*) from bg_article where is_del='0' and cate_id in($ids)";
        return $this->dao->fetchColumn($sql);
    }
    //获取面包屑导航数组信息
    public function getAllCateName($cate_id)
    {
        //获取当前分类的名称和父类的id号
        $sql="select cate_pid,cate_name from bg_category where cate_id=$cate_id";
        $cateInfo=$this->dao->fetchRow($sql);
        $cate_name=$cateInfo['cate_name'];
        static $list=array();
        $list[$cate_id]=$cate_name;
        $cate_pid=$cateInfo['cate_pid'];
        //如果该类别的父类id不为0，递归点开始
        if($cate_pid!=0)
        {
            $this->getAllCateName($cate_pid);
        }
        return array_reverse($list,true);
    }
    //获取该分类下文章点击排行
    public function getSortByHits($cate_id,$length)
    {
        //先获取该分类下所有子类的id号
        $ids=$this->getAllSubIds($cate_id);
        //再拼凑当前分类的id号
        $ids.=$cate_id;
        $sql="select art_id,title from bg_article where is_del='0' and cate_id in($ids) order by hits desc limit $length";
        return $this->dao->fetchAll($sql);
    }
    //获取该分类下推荐文章排行
    public function getSortByRecommend($cate_id,$length)
    {
        //先获取该分类下所有子分类的id号
        $ids=$this->getAllSubIds($cate_id);
        //再拼凑当前分类的id号
        $ids.=$cate_id;
        $sql="select art_id,title from bg_article where is_del='0' and is_recommend='1' and cate_id in($ids) order by addtime desc limit $length";
        return $this->dao->fetchAll($sql);
    }
    //根据id号获取文章的信息
    public function getArtInfoById($art_id)
    {
        $sql="select * from bg_article where art_id=$art_id";
        return $this->dao->fetchRow($sql);
    }
    //更新点击次数
    public function updateHitsById($art_id)
    {
        $sql="update bg_article set hits=hits+1 where art_id=$art_id";
        return $this->dao->my_query($sql);
    }
    //获取该分类下上一篇文章信息
    public function getPrevArt($art_id,$cate_id)
    {
        //先获取该分类下所有子分类的id号
        $son_ids=$this->getAllSubIds($cate_id);
        //再获取该分类及其所有父类的id号
        $father_ids=$this->getAllCateName($cate_id);
        $father_ids=implode(',',array_keys($father_ids));
        $ids=$son_ids.$father_ids;
        $sql="select art_id,title from bg_article where is_del='0' and cate_id in($ids) and art_id<$art_id order by art_id desc limit 1";
        return $this->dao->fetchRow($sql);
    }
    //获取该分类下下一篇文章信息
    public function getNextArt($art_id,$cate_id)
    {
        //先获取该分类下所有子分类的id号
        $son_ids=$this->getAllSubIds($cate_id);
        //再获取该分类及其所有父类的id号
        $father_ids=$this->getAllCateName($cate_id);
        $father_ids=implode(',',array_keys($father_ids));
        $ids=$son_ids.$father_ids;
        $sql="select art_id,title from bg_article where is_del='0' and cate_id in($ids) and art_id>$art_id order by art_id desc limit 1";
        return $this->dao->fetchRow($sql);
    }
    //给当前文章的评论数加1
    public function updateReplyNumsById($art_id)
    {
        $sql="update bg_article set reply_nums=reply_nums+1 where art_id=$art_id";
        return $this->dao->my_query($sql);
    }
}