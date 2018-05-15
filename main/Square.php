<?php

/**
* Square shape class
*/
class Square extends Figure implements iFigure
{
    function __construct($base, $height)
    {
        parent::__construct('Square', $base, $height, null);
    }
    public function getArea(){
        return pow($this->getBase(), 2);
    }
}