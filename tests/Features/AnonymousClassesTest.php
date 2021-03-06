<?php
namespace Shin1x1\PHP7ReferenceSample\Features\Features;

use Shin1x1\PHP7ReferenceSample\BaseTestCase;

class AnonymousClassesTest extends BaseTestCase
{
    /**
     * @test
     */
    public function plain()
    {
        /*
        $object = new class() {
        };

        $this->assertTrue(is_object($object));
        */
        //$this->assertSame('', get_class($object)); // class@anonymous /vagrant/tests/AnonymousClassesTest.php0x7fa21541b0c7
    }
    /**
     * @test
     */
    public function implementsInterface()
    {
        /*
        $object = new class() implements MyReader {
        };

        $this->assertInstanceOf(MyReader::class, $object);
        */
    }
}

interface MyReader {}

