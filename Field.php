<?php 

namespace liangzi\web\form;

/**
 * Class Field
 */
class Field
{
    protected $_name;

    protected $_value;

    protected $_label;

    protected $_children;

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->_parent = $parent;
    }

    protected $_parent;


    function __construct($name, $value, $label)
    {
        $this->_name     = $name;
        $this->_value    = $value;
        $this->_label    = $label;
        $this->init();
    }

    public function init()
    {

    }

    public function setDisplay($data)
    {
        $this->setValue($data);
    }

    public function getDisplay()
    {
        return $this->getValue();
    }

    public function validate()
    {

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







}

