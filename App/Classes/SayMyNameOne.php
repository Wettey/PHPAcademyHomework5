<?php

namespace App\Classes;
require 'App/Interfaces/SayMyNameInterface.php';
use App\Interfaces\SayMyNameInterface;

class SayMyNameOne implements SayMyNameInterface
{
    public function viewAction()
    {
        if(property_exists($this, 'thisClass')) {
            echo $this->thisClass->getDate() . self::class;
        } else {
            echo self::class;
        }
    }

    public function createProperty($name, $value)
    {
        $this->$name = $value;
    }
}