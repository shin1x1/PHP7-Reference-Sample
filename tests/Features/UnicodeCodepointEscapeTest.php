<?php
namespace Shin1x1\PHP7ReferenceSample\Features;

use Shin1x1\PHP7ReferenceSample\BaseTestCase;

class UnicodeCodepointEscapeTest extends BaseTestCase
{
    /**
     * @test
     */
    public function 鬼_()
    {
        $this->assertSame('鬼', "\u{9b3c}");
        $this->assertSame('鬼', "\u{000009b3c}");
    }
}