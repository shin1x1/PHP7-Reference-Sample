<?php
namespace Shin1x1\PHP7ReferenceSample\Features;

use Shin1x1\PHP7ReferenceSample\BaseTestCase;

class CSPRNGFunctionsTest extends BaseTestCase
{
    /**
     * @test
     */
    public function random_bytes()
    {
        $actual = random_bytes(4);
        $this->assertSame(4, strlen($actual));
    }

    /**
     * @test
     */
    public function random_int()
    {
        $actual = random_int(1, 10);
        $this->assertLessThanOrEqual(10, $actual);
        $this->assertGreaterThanOrEqual(1, $actual);
    }
}
