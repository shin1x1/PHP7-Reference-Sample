<?php
//declare(strict_types=1);
namespace Shin1x1\PHP7ReferenceSample\Features;

use Shin1x1\PHP7ReferenceSample\BaseTestCase;

class ReturnTypeDeclarationsTest extends BaseTestCase
{
    /**
     * @test
     * @dataProvider getDataForInt
     */
    public function int_($value)
    {
        $func = function ($i): int {
            return $i;
        };


        $this->assertSame(1, $func($value));
    }

    /**
     * @return array
     */
    public function getDataForInt()
    {
        return [
            [1],
            [1.0], // TypeError if strict_types=1
            ['1'], // TypeError if strict_types=1
            [true], // TypeError if strict_types=1
            //['1a'], // A non well formed numeric value encountered
            //[[1]], // TypeError
            //[null], // TypeError
            //[''], // TypeError
            //['a'], // TypeError
        ];
    }

    /**
     * @test
     * @dataProvider getDataForFloat
     */
    public function float_($value)
    {
        $func = function ($f): float {
            return $f;
        };


        $this->assertSame(1.0, $func($value));
    }

    /**
     * @return array
     */
    public function getDataForFloat()
    {
        return [
            [1],
            [1.0], // TypeError if strict_types=1
            ['1'], // TypeError if strict_types=1
            [true],
            //['1a'], // A non well formed numeric value encountered
            //[[1]], // TypeError
            //[null], // TypeError
            //[''], // TypeError
            //['a'], // TypeError
        ];
    }

    /**
     * @test
     * @dataProvider getDataForString
     */
    public function string_($value)
    {
        $func = function ($s): string {
            return $s;
        };


        $this->assertSame('1', $func($value));
    }

    /**
     * @return array
     */
    public function getDataForString()
    {
        return [
            [1],
            [1.0], // TypeError if strict_types=1
            ['1'], // TypeError if strict_types=1
            [true],
//            [[1]], // TypeError
        ];
    }

    /**
     * @test
     * @dataProvider getDataForBool
     */
    public function bool_($value)
    {
        $func = function ($b): bool {
            return $b;
        };


        $this->assertSame(true, $func($value));
    }

    /**
     * @return array
     */
    public function getDataForBool()
    {
        return [
            [1],
            [1.0], // TypeError if strict_types=1
            ['1'], // TypeError if strict_types=1
            [true],
//            [[1]], // TypeError
        ];
    }
    
    /**
     * @test
     */
    public function array_()
    {
        $func = function ($a): array {
            return $a;
        };

        $this->assertSame([1], $func([1]));

        $object = new \stdClass();
        $object->key = 'name';
//        $this->assertSame(['key' => 'name'], $func($object)); // TypeError

//        $this->assertSame([], $func(null)); // TypeError
//        $this->assertSame([1], $func(1)); // TypeError
    }

    /**
     * @test
     */
    public function callable_()
    {
        $func = function ($a): callable {
            return $a;
        };

        $arg = function () {
            return 'hoge';
        };
        $this->assertSame($arg, $func($arg));

        $this->assertSame('hoge', $func($arg)());
        $this->assertSame('hoge', ($func($arg))());
    }

    /**
     * @test
     */
    public function interface_()
    {
        $func = function ($a): Readable {
            return $a;
        };

        $this->assertInstanceOf(Readable::class, $func(new Foo));
//        $this->assertInstanceOf(Readable::class, $func(new Bar())); // TypeError
//        $this->assertInstanceOf(Readable::class, $func('a')); // TypeError
    }

    /**
     * @test
     */
    public function self_()
    {
        $this->assertInstanceOf(Foo::class, (new Foo())->self());
        $this->assertInstanceOf(FooChild::class, (new FooChild())->self());
    }

    /**
     * @test
     */
    public function parent_()
    {
        $this->assertInstanceOf(FooChild::class, (new FooChild())->parent());
    }
}

interface Readable
{
    public function read(): \ArrayObject;
}

interface Writable
{
    public function write(array $data);
}

class Foo implements Readable, Writable
{
    public function read(): \ArrayObject
    {
        // TODO: Implement read() method.
    }

    public function write(array $data)
    {
        // TODO: Implement write() method.
    }

    public function self(): self
    {
        return new static();
    }
}

class FooChild extends Foo
{
    public function parent(): parent
    {
        return new static();
    }
}

class Bar implements Writable
{

    public function write(array $data)
    {
        // TODO: Implement write() method.
    }
}