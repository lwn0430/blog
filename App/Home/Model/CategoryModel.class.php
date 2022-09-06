<?php
//前台bg_category表操作模型
class CategoryModel extends Model
{
    //获取所有以及分类信息
    public function getFirstCate()
    {
        $sql="select * from bg_category where cate_pid=0 order by cate_sort limit 5";
        return $this->dao->fetchAll($sql);
    }
    //获取当前类别下的第一层子类别
    public function getSubCateByPid($pid)
    {
        $sql="select cate_id,cate_name from bg_category where cate_pid=$pid";
        return $this->dao->fetchAll($sql);
    }
}