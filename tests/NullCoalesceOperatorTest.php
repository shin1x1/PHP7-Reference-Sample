<?php
namespace Shin1x1\PHP7ReferenceSample;

class NullCoalesceOperatorTest extends BaseTestCase
{
    /**
     * @test
     */
    public function array_()
    {
        $array = ['key' => 'name'];
        $this->assertSame('name', $array['key'] ?? 'default');
        $this->assertSame('default', $array['nothing'] ?? 'default');

//        $this->assertSame('default', $array['nothing'] ?: 'default'); // undefined index
    }

    /**
     * @test
     */
    public function object_()
    {
        $object = (object)['key' => 'name'];
        $this->assertSame('name', $object->key ?? 'default');
        $this->assertSame('default', $object->nothing ?? 'default');

//        $this->assertSame('default', $object->nothing ?: 'default'); // undefined property
    }

    /**
     * @test
     */
    public function string_()
    {
        $string = 'key';
        $this->assertSame('k', $string[0] ?? 'default');
        $this->assertSame('default', $string[100] ?? 'default');

//        $this->assertSame('default', $string[100] ?: 'default'); // Uninitialized string offset: 100
    }
}