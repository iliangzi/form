<?php
/**
 * Created by iliangzi/form.
 * User: iliangzi
 * Date: 2017/4/21
 * Time: 上午1:36
 */

namespace iliangzi\web\form\Tests;


use iliangzi\web\form\Field;
use iliangzi\web\form\FieldSet;

class VerifyFieldSet extends FieldSet
{
    /**
     *
     */
    public function init()
    {
        $this->addChild(new Field('code', null, '验证码'));
        $this->addChild(new Field('timestamp', null, '时间戳'));
    }

    /**
     * @param $data
     */
    public function setReal($data)
    {
        $this->getChild('code')->setReal($data['verifycode']);
        $this->getChild('timestamp')->setReal($data['time']);
    }

    /**
     *
     */
    public function getReal()
    {
        $data['verifycode'] = $this->getChild('code')->getReal();
        $data['time'] = $this->getChild('timestamp')->getReal();
        return $data;
    }


}