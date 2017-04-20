<?php

/**
 * Created by PhpStorm.
 * User: liangzi
 * Date: 2017/3/17
 * Time: 上午12:30
 */
namespace liangzi\web\form;

class Form
{
    protected $_children = [];

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

}