<?php
namespace Shin1x1\PHP7ReferenceSample\Features;

use Shin1x1\PHP7ReferenceSample\BaseTestCase;

class ClosureCallMethodTest extends BaseTestCase
{
    /**
     * @test
     */
    public function call_()
    {
        $func = function () {
            return $this->getName();
        };

        $this->assertSame('Buz', $func->call(new ClosureCallMethodTestFoo));
    }
    
    /**
     * @test
     */
    public function iife_()
    {
        $this->assertSame('Buz', (function () {
            return $this->getName();
        })->call(new ClosureCallMethodTestFoo));

    }
}

class ClosureCallMethodTestFoo
{
    private $name = 'Buz';

    private function getName()
    {
        return $this->name;
    }
}