<?php

namespace blok;

use core\LogInterface;
use core\LogAbstract;

Class MyLog extends LogAbstract
    implements LogInterface
{

    public function _write()
    {
        date_default_timezone_set('UTC+3');
        $q = date('d-m-Y\_H.i.s.u');
        foreach ($this->log as $f) {

            echo $f . "\n\r";
            $filename = __DIR__ . "\..\log";

            if (file_exists($filename)) {
                file_put_contents(__DIR__ . "\..\log\\$q.log", trim($f."\r\n") . PHP_EOL, FILE_APPEND);
            } else {
                mkdir(__DIR__ . "\..\log", 0777);
                file_put_contents(__DIR__ . "\..\log\\$q.log", trim($f."\r\n") . PHP_EOL, FILE_APPEND);
            }




        }
    }

    public static function log($str)
    {
        self::Instance()->log[]=$str;
    }

    public static function write()
    {
        self::Instance()->_write();
    }
}
