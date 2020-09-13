<?php

namespace App\Classes;
use App\Interfaces\SayMyNameInterface;

class SayMyNameTwo implements SayMyNameInterface
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