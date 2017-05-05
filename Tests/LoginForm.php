<?php
/**
 * Created by PhpStorm.
 * User: iliangzi
 * Date: 2017/3/18
 * Time: 上午12:10
 */

namespace iliangzi\web\form\Tests;


use iliangzi\web\form\CheckBox;
use iliangzi\web\form\Field;
use iliangzi\web\form\Form;

class LoginForm extends Form
{

    public function __construct()
    {
        parent::__construct();
        $this->addChild(new Field('username',null,'用户名'));
        $this->addChild(new PasswordField('password',null,'密码'));
        $this->addChild(new CheckBox('disclaimer',false,'免责声明'));
        $this->addChild(new VerifyFieldSet('verify','','验证码'));
    }

    public function getReal()
    {
        $data = [];
        $data['uid'] = $this->getChild('username')->getReal();
        $data['pwd'] = $this->getChild('password')->getReal();
        $data += $this->getChild('verify')->getReal();
        return $data;
    }

    public function setReal($data)
    {
        $this->getChild('username')->setReal($data['uid']);
        $this->getChild('password')->setReal($data['pwd']);
        $this->getChild('verify')->setReal($data);
    }


    public function validate()
    {
        parent::validate();
    }


}