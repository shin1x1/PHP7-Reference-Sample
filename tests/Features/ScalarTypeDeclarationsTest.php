<?php
//declare(strict_types=1);
namespace Shin1x1\PHP7ReferenceSample\Features;

use Shin1x1\PHP7ReferenceSample\BaseTestCase;

class ScalarTypeDeclarationsTest extends BaseTestCase
{
    /**
     * @test
     * @dataProvider getDataForInt
     */
    public function int_($value)
    {
        $func = function (int $i) {
            $this->assertSame(1, $i);
        };


        $func($value);
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
        $func = function (float $f) {
            $this->assertSame(1.0, $f);
        };


        $func($value);
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
        $func = function (string $s) {
            $this->assertSame('1', $s);
        };


        $func($value);
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
        $func = function (bool $b) {
            $this->assertSame(true, $b);
        };


        $func($value);
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
}