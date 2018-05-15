<?php

/**
* Circle figure class
*/
class Circle extends Figure implements iFigure
{
    function __construct($diameter)
    {
        parent::__construct('Circle', null, null, $diameter);
    }
    public function getArea(){
        $ratio = $this->getDiameter() / 2;
        return 3.14 * pow($ratio, 2);
    }
}