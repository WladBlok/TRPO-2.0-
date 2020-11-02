<?php

class A
{

}

class B extends A
{
    public function __construct($a)
    {
        $this->a = $a;
    }

    protected $a;
}

class C extends B
{
    public function _construct($a, $b)
    {
        $this->b = $b;
        parent::__construct($a);
    }

    protected $b;
}

$a1 = new A();
$b2 = new B($a1);
$b3 = new B($b2);
$c4 = new C($b3, $a1);
$b5 = new B($c4);

var_dump($b5);