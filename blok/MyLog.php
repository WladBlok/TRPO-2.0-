<?php

namespace blok;

use core\LogInterface;
use core\LogAbstract;

Class MyLog extends LogAbstract
    implements LogInterface
{

    public function _write()
    {
        foreach ($this->log as $f) {

            echo $f . "\n\r";
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
