<?php 
header("Content-type:text/html;Charset=utf-8");
$config=array(
    'pass'=>'lwn04301314',
    'dbname'=>'blog'
);
include './MySQLDB.class.php';
$db=MySQLDB::getInstance($config);

//先获取所有分类的信息
$sql="select * from category";
$list=$db->fetchAll($sql);

function getCateTree($list,$pid=0,$level=0)
{
    //定义静态数组变量用于存放格式化之后的数组
    static $cate_list=array();
    //遍历
    foreach($list as $row)
    {
        if($row['cate_pid']==$pid)
        {
            $row['level']=$level;
            $cate_list[]=$row;
            //递归
            getCateTree($list,$row['cate_id'],$level+1);
        }
    }
    //返回遍历结果
    return $cate_list;
}

//调用这个函数
$cate_list=getCateTree($list);
foreach($cate_list as $row)
{
    echo str_repeat('-',5*$row['level']),$row['cate_name'],'<br>';
}