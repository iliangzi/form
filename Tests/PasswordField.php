<?php
/**
 * Created by PhpStorm.
 * User: iliangzi
 * Date: 2017/3/18
 * Time: 上午12:33
 */

namespace iliangzi\web\form\Tests;


use iliangzi\web\form\Field;

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