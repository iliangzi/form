<?php
/**
 * Created by liangzi/form.
 * User: liangzi
 * Date: 2017/5/5
 * Time: 下午11:32
 */

namespace iliangzi\web\form;


class Error
{
    static public $_instatce = null;
    private $_errors = [];
    /**
     * Error constructor.
     */
    private function __construct()
    {

    }

    static public function getInstance()
    {
        if(is_null(self::$_instatce))
            self::$_instatce = new self();
        return self::$_instatce;
    }

    public function addObj(Field $obj, $msg)
    {
        $this->add($obj->getName(),$msg);
    }

    public function add($key, $msg)
    {
        $this->_errors[$key][] = $msg;
    }

    public function removeObj(Field $obj)
    {
        $this->remove($obj->getName());
    }

    public function remove($key)
    {
        if(isset($this->_errors[$key]))
            unset($this->_errors[$key]);
    }

    public function clear()
    {
        $this->_errors = [];
    }

    public function getErrors()
    {
        return $this->_errors;
    }

    public function getKeys()
    {
        return array_keys($this->_errors);
    }

    public function getError($key)
    {
        if($this->isKeyEmpty($key))
            return [];
        return $this->_errors[$key];
    }

    public function isEmpty()
    {
        return empty($this->_errors);
    }

    public function isKeyEmpty($key)
    {
        if(isset($this->_errors[$key]))
            return true;
        return empty($this->_errors[$key]);
    }

    public function isOjbEmpty(Field $obj)
    {
        return $this->isKeyEmpty($obj->getName());
    }


}