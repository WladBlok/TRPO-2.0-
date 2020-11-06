<?php


namespace blok;
use BlokException;
class Linear
{
    protected $x;

    public function line_equation($b, $c)
    {
        if ($b != 0) {
            return $this->x = (-$c) / $b;

        }

        return 0;

    }

}