<?php
/**
 * Created by liangzi/form.
 * User: liangzi
 * Date: 2017/4/21
 * Time: 上午1:14
 */

$separate = <<<SPT
\n\r
       |    |   |
       |    |   |
       |    |   |
       V    V   V
\n\r
SPT;

require(dirname(dirname(__FILE__)).'/autoload.php');

$loginForm = new \liangzi\web\form\Tests\LoginForm();
$data = array(
    'username'=>'test',
    'password'=>'test',
    'disclaimer'=>true,
    'verify'=>[
        'code'=>1234,
        'timestamp'=>time(),
    ],
);

$loginForm->setDisplay($data);
$loginForm->validate();
$ret = $loginForm->getReal();

var_export($data);
echo $separate;
var_export($ret);



echo "\r\n";