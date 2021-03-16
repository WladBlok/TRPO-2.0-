<?php

require_once __DIR__ . './vendor/autoload.php';
use blok\BlokException;
try {
    blok\MyLog::log("Версия программы: " . trim(file_get_contents('version')) );
    echo "Enter 3 values:\n\r";
    $a = (float)readline();
    $b = (float)readline();
    $c = (float)readline();
    blok\MyLog::log("The equation $a*x^2+$b*x+$c=0");
    $o = new \blok\Quadre();
    $r = $o->solve($a, $b, $c);
    blok\MyLog::log("Roots:" . implode(", ", $r));
} catch (BlokException $e) {
    blok\MyLog::log($e->getMessage());

}

blok\MyLog::write();