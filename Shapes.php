<?php


class Shapes
{
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }

    public function show()
    {
        return 'I am a shape. My shape is $this->name ';
    }
}