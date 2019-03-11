<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/3/11
 * Time: 4:42 PM
 */

require_once "./PHPExcel.php";
require_once "./PHPExcel/IOFactory.php";
require_once "./PHPExcel/Writer/Excel2007.php";
require_once "./medoo.php";

date_default_timezone_set('PRC');

$dir=dirname(__FILE__);

$excel = new PHPExcel();

$database = new medoo([
    // 必须配置项
    'database_type' => 'mysql',
    'database_name' => 'behinders',
    'server' => '127.0.0.1',
    'username' => 'root',
    'password' => 'admin123',
    'charset' => 'utf8',

    // 可选参数
    'port' => 3306,

    'prefix' => '',

    // 连接参数扩展, 更多参考 http://www.php.net/manual/en/pdo.setattribute.php
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

$datas = $database->select("no_phone_users", "*");
//Excel表格式,这里简略写了8列
$letter = array('A','B','C','D','E','F','G','H');

foreach ($letter as $col)
{
    $excel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
}
//表格数组

$excel->setActiveSheetIndex()
    ->setCellValue('A1',"用户头像")
    ->setCellValue('B1', "昵称")
    ->setCellValue('C1', "性别")
    ->setCellValue('D1', "生日")
    ->setCellValue('E1', "手机号")
    ->setCellValue('F1', "app_id")
    ->setCellValue('G1', "user_id")
    ->setCellValue('H1', "wx_account")
    ->setCellValue('I1', "created_at");

foreach ($datas as $k=>$v){
    $num = $k+2;
    $excel->setActiveSheetIndex(0)
        ->setCellValue('A'.$num, $v['avatar'])
        ->setCellValue('B'.$num, $v['nickname'])
        ->setCellValue('C'.$num, $v['gender'])
        ->setCellValue('D'.$num, $v['birth'])
        ->setCellValue('E'.$num, "\t".$v['phone'])
        ->setCellValue('F'.$num, $v['app_id'])
        ->setCellValue('G'.$num, $v['user_id'])
        ->setCellValue('H'.$num, $v['wx_account'])
        ->setCellValue('I'.$num, $v['created_at']);
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
$objWriter->save($dir."/no_phone_users.xlsx");
