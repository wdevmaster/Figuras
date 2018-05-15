<?php

require_once 'Figure.php';
require_once 'iFigure.php';
require_once "Circle.php";
require_once "Square.php";
require_once "Triangle.php";

class FigureFactory{

    public static function Create($type, $a, $b = null){
        switch ($type) {
            case 'Circle':
                return new Circle($a);
                break;
            case 'Square':
                return new Square($a, $b);
                break;
            case 'Triangle':
                return new Triangle($a, $b);
                break;
            default:
                throw new \Exception("Invalid Type");
                break;
        }
    }
}