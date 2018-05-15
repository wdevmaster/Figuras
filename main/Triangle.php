<?php

/**
 * Triangle figure class
 */
class Triangle extends Figure implements iFigure
{
    function __construct($base, $height)
    {
        parent::__construct('Triangle', $base, $height, null);
    }
    public function getArea(){
        return ($this->getBase() * $this->getHeight()) / 2;
    }
}