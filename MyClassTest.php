<?php

require_once "vendor\autoload.php";
require_once "MyClass.php";

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    private $myClass;

    protected function setUp(): void
    {
        $this->myClass = new MyClass();
    }

    public function testSomething()
    {
        $this->assertTrue(true);
    }

    public function testPowerWithParameters()
    {
        $testData = [
            [2, 2, 4],
            [2, 3, 9],
            [3, 5, 243]
        ];

        foreach ($testData as $data) {
            $a = $data[0];
            $b = $data[1];
            $c = $data[2];

            $result = $this->myClass->power($a, $b);
            $this->assertEquals($c, $result, "Failed for a=$a, b=$b, expected $c, got $result");
        }
    }
}