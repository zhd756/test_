<?php
/**
 * Created by PhpStorm.
 * User: 775302585@qq.com
 * Date: 2018/4/18
 * Time: 9:53
 */

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

require_once __DIR__ .'/../require.php';

$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

//$str = $_SERVER['QUERY_STRING'];
//dump($_GET);exit;
//parse_str:将字符串解析成多个变量
//parse_str($str,$arr);

$arr = $_GET;
$c = $arr['c']?:'tt';
$a = $arr['a']?:'test';
$do = $arr['do']?:'display';
$class = '\web\\'. $c.'\\'.$a;

include '../web/source/'.$c.'/'.$a.'.php';

$cl =  new $class();
$cl->$do();




