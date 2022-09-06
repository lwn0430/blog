<?php
//缩略图应用
//1.创建原图画布
$src_img=imagecreatefromjpeg('./得不到的Love.jpg');
//2.创建缩略图画布
$dst_img=imagecreatetruecolor(200,200);
//填充背景色
$bgColor=imagecolorallocate($dst_img,255,255,255);
imagefill($dst_img,0,0,$bgColor);
//3.获取原图的信息
echo '<pre>';
//var_dump(getimagesize('./得不到的Love.jpg'));
//var_dump(imagesx($src_img));
//var_dump(imagesy($src_img));
//3.采样，拷贝
$src_info=getimagesize('./得不到的Love.jpg');
$src_w=$src_info[0];
$src_h=$src_info[1];
imagecopyresampled($dst_img,$src_img,0,0,0,0,200,200,$src_w,$src_h);
//4.输出缩略图
header("Content-type:image/jpeg");
ob_clean();
imagejpeg($dst_img);

//5.销毁画布资源
imagedestroy($dst_img);
imagedestroy($src_img);
