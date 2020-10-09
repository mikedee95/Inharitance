<?php
include_once 'Circle.php';

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius, $_height)
    {
        parent::__construct($name,$radius);
        $this->height = $_height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }

}