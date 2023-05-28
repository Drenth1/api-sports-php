<?php

namespace Drenth1\ApiSports\Tests\Unit\Validator;

use Drenth1\ApiSports\Tests\BaseTestCase;
use Drenth1\ApiSports\Validation\Validator;

/** @testdox The datatype Validator */
class DataTypeValidationTest extends BaseTestCase
{
    /** @testdox throws an error on invalid datatype */
    public function test_datatype_validator_throws_error_on_invalid_datatype() : void
    {
        $this->expectException('InvalidArgumentException');
        Validator::dataType('TestString', 'ThisDoesNotExist');
    }

    /** @testdox validates a float */
    public function test_datatype_validator_validates_floats() : void
    {
        $this->assertTrue(Validator::dataType(1.43, 'float'));
        $this->assertFalse(Validator::dataType('ThisIsAString', 'float'));
    }

    /** @testdox validates a string */
    public function test_datatype_validator_validates_string() : void
    {
        $this->assertTrue(Validator::dataType('ThisIsAString', 'string'));
        $this->assertFalse(Validator::dataType([], 'string'));
    }

    /** @testdox validates an array */
    public function test_datatype_validator_validates_arrays() : void
    {
        $this->assertTrue(Validator::dataType([], 'array'));
        $this->assertTrue(Validator::dataType(['value'], 'array'));
        $this->assertTrue(Validator::dataType(['key' => 'value'], 'array'));
        $this->assertFalse(Validator::dataType('ThisIsAString', 'array'));
    }

    /** @testdox validates an object */
    public function test_datatype_validator_validates_objects() : void
    {
        $this->assertTrue(Validator::dataType(new class {}, 'object'));
        $this->assertFalse(Validator::dataType('ThisIsAString', 'object'));
    }
}