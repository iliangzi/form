<?php

/**
 * Created by PhpStorm.
 * User: liangzi
 * Date: 2017/3/16
 * Time: 下午11:59
 */

namespace liangzi\web\form;

/**
 * Class FieldSet
 */
class FieldSet extends Field
{

    public function addChild(Field $child)
    {
        $this->_children[$child->getName()] = $child;
        $child->setParent($this);
    }

    public function removeChild($name)
    {
        if(isset($this->_children[$name]))
            unset($this->_children[$name]);
    }

    public function getChild($name)
    {
        if(isset($this->_children[$name]))
            return $this->_children[$name];
        return false;
    }

    public function setDisplay($data)
    {
        foreach ($this->_children as $n => $c)
        {
            if(isset($data[$n]))
                $c->setDisplay($data[$n]);
        }
    }

    public function getDisplay()
    {
        $data = [];
        foreach ($this->_children as $n=>$c)
        {
            $data[$n] = $c->getDisplay();
        }
        return $data;
    }

    public function validate()
    {
        foreach ($this->_children as $n => $c)
        {
            $c->validate();
        }
        return true;
    }

    public function setReal()
    {

    }

    public function getReal()
    {

    }
}