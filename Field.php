<?php 

namespace iliangzi\web\form;

/**
 * Class Field
 */
class Field
{
    /**
     * @var 字段名
     */
    protected $_name;

    /**
     * @var 字段值
     */
    protected $_value;

    /**
     * @var 字段描述
     */
    protected $_label;


    /**
     * @var 字段父节点
     */
    protected $_parent;


    function __construct($name, $value, $label)
    {
        $this->_name     = $name;
        $this->_value    = $value;
        $this->_label    = $label;
        $this->init();
    }

    /**
     *初始化
     */
    public function init()
    {

    }

    /**
     * 设置前端数据
     * @param $data
     */
    public function setDisplay($data)
    {
        $this->setValue($data);
    }

    /**
     * 获取前端数据
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->getValue();
    }

    /**
     * 设置后台数据
     * @param $data
     */
    public function setReal($data)
    {
        $this->_value = $data;
    }

    /**
     * 获取后台数据
     * @return mixed
     */
    public function getReal()
    {
        return $this->getValue();
    }


    /**
     * 校验函数
     * @return bool
     */
    public function validate()
    {
        return true;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->_value = $value;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->_label;
    }

    /**
     * @return mixed
     */
    public function getChildren()
    {
        return $this->_children;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->_parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->_parent = $parent;
    }







}

