<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2018/12/24
 * Time: 6:21 PM
 */

$total = 100;
for ($i = 1; $i <= $total; $i++)
{
    printf("progress: [%-50s] %d%% Done\r", str_repeat('#',$i/$total*50), $i/$total*100);
    sleep(1);
}
echo "\n";
echo "Done!\n";