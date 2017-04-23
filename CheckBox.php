<?php
/**
 * Created by PhpStorm.
 * User: iliangzi
 * Date: 2017/3/18
 * Time: 上午12:39
 */

namespace iliangzi\web\form;


class CheckBox extends Field
{

    /**
     * @return boolean
     */
    public function isEnable()
    {
        return (bool)$this->_value;
    }

    /**
     * @param boolean $enable
     */
    public function setEnable($enable)
    {
        $this->_value = (bool)$enable;
    }


    public function enable()
    {
        $this->_value = true;
    }

    public function disable()
    {
        $this->_value = false;
    }


}