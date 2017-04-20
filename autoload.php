<?php
/**
 * Created by liangzi/form.
 * User: liangzi
 * Date: 2017/4/21
 * Time: 上午12:49
 */

function loadForm($class)
{
    $class = ltrim($class,'\\');
    $class = str_replace('\\','/',$class);
    $class = str_replace('liangzi/web/form/','',$class);
    $className = pathinfo($class,PATHINFO_FILENAME);
    $dir = dirname(__FILE__).'/';
    $classFile = $dir.$class.'.php';
    if(!file_exists($classFile))
        die('未找到Class:'.$className);
    require_once($classFile);
    return true;

}

spl_autoload_register('loadForm');