<?php
/**
 * Created by PhpStorm.
 * User: 775302585@qq.com
 * Date: 2018/4/18
 * Time: 10:41
 */
namespace web\tt;

require_once PROJECT_PATH.'/extend/export-master/excel.php';

class test
{
    public function display()
    {
        $title = '模板标题';
        $txt = '123';
        echo 1;

        echo 3;

        include PROJECT_PATH.'/web/themes/tt/test.php';
    }

}