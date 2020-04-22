<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/3/11
 * Time: 4:42 PM
 */

require_once "./PHPExcel/PHPExcel.php";
require_once "./PHPExcel/PHPExcel/IOFactory.php";
require_once "./PHPExcel/PHPExcel/Writer/Excel2007.php";
require_once "./medoo.php";

date_default_timezone_set('PRC');

$dir=dirname(__FILE__);

$excel = new PHPExcel();

$database = new medoo([
    // 必须配置项
    'database_type' => 'mysql',
    'database_name' => 'pengine',
    'server' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // 可选参数
    'port' => 3306,

    'prefix' => '',

    // 连接参数扩展, 更多参考 http://www.php.net/manual/en/pdo.setattribute.php
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

$datas = $database->select(
    "oip_implantlibrary",
    array('id','company','type','platform','lable','apical_diameter','occlusal_diameter','length'),
    array('company[!]'=>'自定义')
);

//var_dump($datas);exit();
//Excel表格式,这里简略写了8列
$letter = array('A','B','C','D','E','F','G','H');

foreach ($letter as $col)
{
    $excel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
}
//表格数组

$excel->setActiveSheetIndex()
    ->setCellValue('A1',"id")
    ->setCellValue('B1', "company")
    ->setCellValue('C1', "type")
    ->setCellValue('D1', "platform")
    ->setCellValue('E1', "lable")
    ->setCellValue('F1', "apical_diameter")
    ->setCellValue('G1', "occlusal_diameter")
    ->setCellValue('H1', "length");

foreach ($datas as $k=>$v){
    $num = $k+2;
    $excel->setActiveSheetIndex(0)
        ->setCellValue('A'.$num, $v['id'])
        ->setCellValue('B'.$num, $v['company'])
        ->setCellValue('C'.$num, $v['type'])
        ->setCellValue('D'.$num, $v['platform'])
        ->setCellValue('E'.$num, $v['lable'])
        ->setCellValue('F'.$num, $v['apical_diameter'])
        ->setCellValue('G'.$num, $v['occlusal_diameter'])
        ->setCellValue('H'.$num, $v['length']);
}
$name = date("Y-m-d H:i:s",time());
header("Pragma: public");
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("Content-Type:application/force-download");
header("Content-Type:application/vnd.ms-execl");
header("Content-Type:application/octet-stream");
header("Content-Type:application/download");;
header('Content-Disposition:attachment;filename="'.$name.'.xlsx"');
header("Content-Transfer-Encoding:binary");
$objWriter = \PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$objWriter->save($dir."/oip_implantlibrary.xlsx");
