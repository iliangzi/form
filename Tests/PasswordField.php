<?php
/**
 * Created by PhpStorm.
 * User: iliangzi
 * Date: 2017/3/18
 * Time: 上午12:33
 */

namespace iliangzi\web\form\Tests;


use iliangzi\web\form\Error;
use iliangzi\web\form\Field;

class PasswordField extends Field
{
    /**
     * @return bool
     */
    public function validate()
    {
        $pwd = $this->getValue();
        $len = mb_strlen($pwd);
        if($len < 6 || $len > 100)
        {
            Error::getInstance()->addObj($this,'密码长度在6-100位之间');
            return false;
        }
        return true;
    }

}