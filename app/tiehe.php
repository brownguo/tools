<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/11/14
 * Time: 11:36 PM
 */

function opentow(){
    $Absolute_Path=substr($_SERVER['SCRIPT_FILENAME'],0,-10);
    //本地的绝对路径
    $dst_path = '1.png';//背景图
    $src_path= '2.png'; //头像
    $hz = substr(strrchr($dst_path, '.'), 1);
    $path = './';
    //生成新图片名
    $image = $path.date("YmdHis").rand(1000,9999).".".$hz;
    //创建图片的实例
    $dst = imagecreatefromstring(file_get_contents($dst_path));
    $src = imagecreatefromstring(file_get_contents($src_path));
    //获取水印图片的宽高
    $src_w =139;$src_h=58;
    list($src_w,$src_h) = getimagesize($src_path);
    //如果水印图片本身带透明色，则使用imagecopy方法
    imagecopy($dst, $src, 310,158, 0, 0, $src_w, $src_h);
    //输出图片
    list($src_w, $src_h, $dst_type) = getimagesize($dst_path);
    switch ($dst_type) {
        case 1://GIF
            imagegif($dst, $image);
            break;
        case 2://JPG
            imagejpeg($dst, $image);
            break;
        case 3://PNG
//              header('Content-Type: image/png');
            imagepng($dst, $image);
            break;
        default:
            break;
    }
    return $image;
}
opentow();