<?php

namespace App;
require 'Extra/Prefix.php';
use Extra\Prefix;

final class App
{
    public $randomIndex = 0;
    public $classArray = [];

    public function displayRandomClass()
    {
        $chosenClass = $this->classArray[$this->randomIndex];
        $prefix = new Prefix();
        $prefix->setDate();

        $chosenClass->createProperty('thisClass', $prefix);
        $chosenClass->viewAction();
    }
}