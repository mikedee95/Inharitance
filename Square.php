<?php
include_once 'Rectangle.php';


class Square extends Rectangle
{
    public function __construct($_name,$_width)
    {
            parent::__construct($_name,$_width,$_width);
    }
    public function calculateArea()
    {
        return parent::calculateArea();
    }

    public function calculatePerimeter()
    {
        return parent::calculatePerimeter();
    }

}