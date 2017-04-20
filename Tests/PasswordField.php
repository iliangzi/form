<?php
/**
 * Created by PhpStorm.
 * User: liangzi
 * Date: 2017/3/18
 * Time: 上午12:33
 */

namespace liangzi\web\form\Tests;


use liangzi\web\form\Field;

class PasswordField extends Field
{
    public function _validate()
    {
        $pwd = $this->getValue();
        $len = mb_strlen($pwd);
        if($len < 6 || $len > 100)
            return false;
        return true;
    }

}