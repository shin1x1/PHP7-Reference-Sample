<?php
namespace Shin1x1\PHP7ReferenceSample;

class SupportForArrayConstantsTest extends BaseTestCase
{
    /**
     * @test
     */
    public function define_()
    {
        define('CONSTANTS', [1, 2, 3]);

        $this->assertSame([1, 2, 3], CONSTANTS);
    }
}