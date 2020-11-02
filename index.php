
<?php

class A
{
    protected $x;

    public function line_equation($a, $b)
    {
        if ($a != 0) {
            return $this->x = (-$b) / $a;
        }
        return null;


    }

}


class B extends A
{
    protected $d;
    protected $k;


    public function quadratic_equation($a, $b, $c)
    {
        if ($a == 0) {
            $this->line_equation($a, $b);
        }
        $d = pow($b, 2) - 4 * $a * $c;

        if ($d < 0) {
            return array();
        }
        if ($d == 0) {
            return $this->x = -$b / (2 * $a);

        }
            $x = -$b + sqrt($d) / (2 * $a);
            $k = -$b - sqrt($d) / (2 * $a);
            return array($x, $k);

    }


}

