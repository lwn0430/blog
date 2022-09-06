<?php
//等比例缩略图
//已知条件
$max_w=200;             //缩略图画布最大的宽
$max_h=200;             //缩略图画布最大的高
$dst_wh=$max_w / $max_h;//缩略图画布宽高比
//未知条件
$src_file='./得不到的Love.jpg';
$src_info=getimagesize($src_file);
$src_w=$src_info[0];    //原图宽
$src_h=$src_info[1];    //原图高
$src_wh=$src_w / $src_h;//原图宽高比
//创建原图画布
$src_img=imagecreatefromjpeg($src_file);
//创建缩略图画布并填充背景色
$dst_img=imagecreatetruecolor($max_w,$max_h);
$bgColor=imagecolorallocate($dst_img,255,255,255);
imagefill($dst_img,0,0,$bgColor);

//确定拷贝到缩略图画布的图片的宽和高
if($src_wh>$dst_wh)
{
    $dst_w=$max_w;
    $dst_h=floor($dst_w / $src_wh);
}else{
    $dst_h=$max_h;
    $dst_w=floor($dst_h*$src_wh);
}

//确定拷贝到缩略图画布的图片的坐标
$dst_x=($max_w - $dst_w) / 2;
$dst_y=($max_h - $dst_h) / 2;
//采样，拷贝
imagecopyresampled($dst_img,$src_img,$dst_x,$dst_y,0,0,$dst_w,$dst_h,$src_w,$src_h);
//输出缩略图
header("Content-type:image/jpeg");
ob_clean();
imagejpeg($dst_img);

//销毁画布资源
imagedestroy($dst_img);
imagedestroy($src_img);
