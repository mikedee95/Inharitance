<?php
include_once ('Shapes.php');

class Rectangle extends Shapes
{
    public $width;
    public $height;

    public function __construct($_name,$_width,$_height)
    {
        parent::__construct($_name);
        $this->width = $_width;
        $this->height = $_height;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width)*2;
    }
}