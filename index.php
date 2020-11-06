<?php

use blok\MyLog;
require_once 'core/EquationInterface.php';
require_once 'core/LogAbstract.php';
require_once 'core/LogInterface.php';
require_once 'blok/BlokException.php';
require_once 'blok/Linear.php';
require_once 'blok/MyLog.php';
require_once 'blok/Quadre.php';


try {
    echo "Enter 3 values:";
    $a = (float)readline();
    $b = (float)readline();
    $c = (float)readline();
    MyLog::log("The equation $a*x^2+$b*x+$c=0");
    $o = new \blok\Quadre();
    $r = $o->solve($a, $b, $c);
    MyLog::log("Roots:" . implode(", ", $r));
} catch (BlokException $e) {
    MyLog::log($e->getMessage());

}

MyLog::write();