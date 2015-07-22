<?php
namespace Shin1x1\PHP7ReferenceSample\Features;

use Shin1x1\PHP7ReferenceSample\BaseTestCase;

class CombinedComparisonOperatorTest extends BaseTestCase
{
    /**
     * @test
     */
    public function int_()
    {
        $this->assertSame(1, 1 <=> 0);
        $this->assertSame(0, 1 <=> 1);
        $this->assertSame(-1, 1 <=> 2);
    }

    /**
     * @test
     */
    public function int_vs_string()
    {
        $this->assertSame(1, 1 <=> '0');
        $this->assertSame(0, 1 <=> '1');
        $this->assertSame(-1, 1 <=> '2');
    }
}