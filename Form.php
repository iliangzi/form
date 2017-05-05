<?php

/**
 * Created by PhpStorm.
 * User: iliangzi
 * Date: 2017/3/17
 * Time: 上午12:30
 */
namespace iliangzi\web\form;

class Form
{
    protected $_children = [];

    private $_log = null;

    /**
     * Form constructor.
     */
    public function __construct()
    {
        $this->_log = Error::getInstance();
    }


    /**
     * @return array
     */
    public function getChild($name)
    {
        if(isset($this->_children[$name]))
            return $this->_children[$name];
        return false;
    }


    /**
     * @param Field $child
     */
    public function addChild(Field $child)
    {
        $this->_children[$child->getName()] = $child;
    }

    /**
     * @param $name
     */
    public function removeChild($name)
    {
        if(isset($this->_children[$name]))
            unset($this->_children[$name]);
    }

    /**
     * @param $data
     */
    public function setDisplay($data)
    {
        foreach ($this->_children as $child)
        {
            if(isset($data[$child->getName()]))
                $child->setDisplay($data[$child->getName()]);
        }
    }

    /**
     * @return array
     */
    public function getDisplay()
    {
        $data = [];
        foreach ($this->_children as $child)
        {
            $data[$child->getName()] = $child->getDisplay();
        }
        return $data;
    }

    /**
     * @return array
     */
    public function getReal()
    {
        return [];
    }

    /**
     * @param $data
     */
    public function setReal($data)
    {
        die(__FUNCTION__.'未实现');
    }

    /**
     *校验函数
     */
    public function validate()
    {
        foreach ($this->_children as $child)
        {
            $child->validate();
        }
        return true;
    }

    public function hasError()
    {
        return !$this->_log->isEmpty();
    }


    public function getError()
    {
        $errors = $this->_log->getErrors();
        $msgs = [];
        foreach ($errors as $k=>$err)
        {
            $msgs += $err;
        }
        return $msgs;
    }

}