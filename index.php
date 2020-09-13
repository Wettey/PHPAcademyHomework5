<?php

use  App\Classes\{SayMyNameOne, SayMyNameTwo, SayMyNameThree};

require 'App/Classes/SayMyNameOne.php';
require 'App/Classes/SayMyNameTwo.php';
require 'App/Classes/SayMyNameThree.php';
require 'App/App.php';

use App\App;

$classArrayOne = new SayMyNameOne();
$classArrayTwo = new SayMyNameTwo();
$classArrayThree = new SayMyNameThree();

$filledArray = [0=>$classArrayOne, 1=>$classArrayTwo, 2=>$classArrayThree];

$min = 0;
$max = 2;
$r = rand($min, $max);


$app = new App();
$app->randomIndex = $r;
$app->classArray = $filledArray;

echo $app->displayRandomClass();