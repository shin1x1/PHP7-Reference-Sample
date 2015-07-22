<?php
namespace Shin1x1\PHP7ReferenceSample\Features;

use Shin1x1\PHP7ReferenceSample\BaseTestCase;

class ExpectationsTest extends BaseTestCase
{
    /**
     * @test
     */
    public function assert_()
    {
        assert(true);
    }

    /**
     * @test
     */
    public function assert_error()
    {
        ini_set('assert.exception', 1);

        try {
            assert(false);
            $this->fail();
        } catch (\Throwable $e) {
            $this->assertInstanceOf(\AssertionError::class, $e);
        }
    }

    /**
     * @test
     */
    public function assert_error_zend_assertions_is_zero()
    {
        ini_set('zend.assertions', 0);
        assert(false);
    }

    /**
     * @test
     */
    public function assert_error_zend_assertions_is_minus()
    {
//        ini_set('zend.assertions', -1); // zend.assertions may be completely enabled or disabled only in php.ini
//        assert(false);
    }
}