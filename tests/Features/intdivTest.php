<?php
namespace Shin1x1\PHP7ReferenceSample\Features;

use Shin1x1\PHP7ReferenceSample\BaseTestCase;

class intdivTest extends BaseTestCase
{
    /**
     * @test
     */
    public function intdiv_()
    {
        $this->assertSame(3, intdiv(10, 3));
        $this->assertSame(3, intdiv(19, 5));
    }
}