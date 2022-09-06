<?php
//后台bg_singlePage表操作模型
class SinglePageModel extends Model
{
    //获取所有的单页面信息
    public function getSinglePage()
    {
        $sql="select * from bg_singlePage order by page_id desc";
        return $this->dao->fetchAll($sql);
    }
    //单页面入库
    public function insertPage($pageInfo)
    {
        extract($pageInfo);
        //入库
        $sql="insert into bg_singlePage values(null,'$title','$content')";
        return $this->dao->my_query($sql);
    }
    //根据page_id号获取单页面信息
    public function getPageInfoById($page_id)
    {
        $sql="select * from bg_singlepage where page_id=$page_id";
        return $this->dao->fetchRow($sql);
    }
    //54.根据id号修改单页信息
    public function updatePageById($page)
    {
        //通过数组得到多个变量
        extract($page);
        $sql="update bg_singlepage set title='$title',content='$content' where page_id=$page_id";
        return $this->dao->my_query($sql);
    }
    //54.删除指定的单页信息
    public function delPageById($page_id)
    {
        $sql="delete from bg_singlepage where page_id=$page_id";
        return $this->dao->my_query($sql);
    }
    //54.批量删除单页信息
    public function delAllCate($page_id)
    {
        //$page_id是数组，先给它转换为字符串
        $page_id=implode(',',$page_id);
        $sql="delete from bg_singlepage where page_id in($page_id)";
        return $this->dao->my_query($sql);
    }
}