<?php
include_once ('Shapes.php');

class Circle extends Shapes
{
        public $radius;
        public function __construct($name, $_radius){
            parent::__construct($name);
            $this->radius = $_radius;
}

    public function calculateArea()
    {
        return pi()*pow($this->radius,2);
        }

    public function calculatePerimeter()
    {
        return pi()*$this->radius*2;
    }
}