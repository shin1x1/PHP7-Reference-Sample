<?php
namespace Shin1x1\PHP7ReferenceSample\Features;

use Shin1x1\PHP7ReferenceSample\BaseTestCase;
use Shin1x1\PHP7ReferenceSample\Acme\{Foo, Bar};

class GroupUseDeclarationsTest extends BaseTestCase
{
    /**
     * @test
     */
    public function execute_()
    {
        $this->assertInstanceOf(Foo::class, new Foo());
        $this->assertInstanceOf(Bar::class, new Bar());
    }
}