<?php

namespace Drenth1\ApiSports\Tests\Unit\Validator;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Validator;

/** @testdox \Drenth1\ApiSports\Validation\Validator */
class DataTypeValidationTest extends TestCase
{
    /** @testdox Data Type (String) */
    public function test_data_type_validation_matches_string() : void
    {
        $this->assertTrue(Validator::dataType('hello', 'string'));
        $this->assertTrue(Validator::dataType(' ', 'string'));
        $this->assertTrue(Validator::dataType('', 'string'));

        $this->assertFalse(Validator::dataType([], 'string'));
        $this->assertFalse(Validator::dataType(['hello'], 'string'));
        $this->assertFalse(Validator::dataType(['key' => 'value'], 'string'));

        $this->assertFalse(Validator::dataType(null, 'string'));
        $this->assertFalse(Validator::dataType(true, 'string'));
        $this->assertFalse(Validator::dataType(false, 'string'));

        $this->assertFalse(Validator::dataType(1, 'string'));
        $this->assertFalse(Validator::dataType(-1, 'string'));
        $this->assertFalse(Validator::dataType(1.48, 'string'));

        $this->assertFalse(Validator::dataType(new \stdClass(), 'string'));
    }

    /** @testdox Data Type (Integer) */
    public function test_data_type_validation_matches_integer() : void
    {
        $this->assertFalse(Validator::dataType('hello', 'integer'));
        $this->assertFalse(Validator::dataType(' ', 'integer'));
        $this->assertFalse(Validator::dataType('', 'integer'));

        $this->assertFalse(Validator::dataType([], 'integer'));
        $this->assertFalse(Validator::dataType(['hello'], 'integer'));
        $this->assertFalse(Validator::dataType(['key' => 'value'], 'integer'));

        $this->assertFalse(Validator::dataType(null, 'integer'));
        $this->assertFalse(Validator::dataType(true, 'integer'));
        $this->assertFalse(Validator::dataType(false, 'integer'));

        $this->assertTrue(Validator::dataType(1, 'integer'));
        $this->assertTrue(Validator::dataType(-1, 'integer'));
        $this->assertFalse(Validator::dataType(1.48, 'integer'));

        $this->assertFalse(Validator::dataType(new \stdClass(), 'integer'));
    }

    /** @testdox Data Type (Array) */
    public function test_data_type_validation_matches_array() : void
    {
        $this->assertFalse(Validator::dataType('hello', 'array'));
        $this->assertFalse(Validator::dataType(' ', 'array'));
        $this->assertFalse(Validator::dataType('', 'array'));

        $this->assertTrue(Validator::dataType([], 'array'));
        $this->assertTrue(Validator::dataType(['hello'], 'array'));
        $this->assertTrue(Validator::dataType(['key' => 'value'], 'array'));

        $this->assertFalse(Validator::dataType(null, 'array'));
        $this->assertFalse(Validator::dataType(true, 'array'));
        $this->assertFalse(Validator::dataType(false, 'array'));

        $this->assertFalse(Validator::dataType(1, 'array'));
        $this->assertFalse(Validator::dataType(-1, 'array'));
        $this->assertFalse(Validator::dataType(1.48, 'array'));

        $this->assertFalse(Validator::dataType(new \stdClass(), 'array'));
    }

    /** @testdox Data Type (Object) */
    public function test_data_type_validation_matches_object() : void
    {
        $this->assertFalse(Validator::dataType('hello', 'object'));
        $this->assertFalse(Validator::dataType(' ', 'object'));
        $this->assertFalse(Validator::dataType('', 'object'));

        $this->assertFalse(Validator::dataType([], 'object'));
        $this->assertFalse(Validator::dataType(['hello'], 'object'));
        $this->assertFalse(Validator::dataType(['key' => 'value'], 'object'));

        $this->assertFalse(Validator::dataType(null, 'object'));
        $this->assertFalse(Validator::dataType(true, 'object'));
        $this->assertFalse(Validator::dataType(false, 'object'));

        $this->assertFalse(Validator::dataType(1, 'object'));
        $this->assertFalse(Validator::dataType(-1, 'object'));
        $this->assertFalse(Validator::dataType(1.48, 'object'));

        $this->assertTrue(Validator::dataType(new \stdClass(), 'object'));
    }

    /** @testdox Data Type (Float) */
    public function test_data_type_validation_matches_float() : void
    {
        $this->assertFalse(Validator::dataType('hello', 'float'));
        $this->assertFalse(Validator::dataType(' ', 'float'));
        $this->assertFalse(Validator::dataType('', 'float'));

        $this->assertFalse(Validator::dataType([], 'float'));
        $this->assertFalse(Validator::dataType(['hello'], 'float'));
        $this->assertFalse(Validator::dataType(['key' => 'value'], 'float'));

        $this->assertFalse(Validator::dataType(null, 'float'));
        $this->assertFalse(Validator::dataType(true, 'float'));
        $this->assertFalse(Validator::dataType(false, 'float'));

        $this->assertFalse(Validator::dataType(1, 'float'));
        $this->assertFalse(Validator::dataType(-1, 'float'));
        $this->assertTrue(Validator::dataType(1.48, 'float'));

        $this->assertFalse(Validator::dataType(new \stdClass(), 'float'));
    }

    /** @testdox Data Type (List/Non-Associative Array) */
    public function test_data_type_validation_matches_assoc_array_or_list() : void
    {
        $this->assertFalse(Validator::dataType('hello', 'list'));
        $this->assertFalse(Validator::dataType(' ', 'list'));
        $this->assertFalse(Validator::dataType('', 'list'));

        $this->assertTrue(Validator::dataType([], 'list'));
        $this->assertTrue(Validator::dataType(['hello'], 'list'));
        $this->assertFalse(Validator::dataType(['key' => 'value'], 'list'));

        $this->assertFalse(Validator::dataType(null, 'list'));
        $this->assertFalse(Validator::dataType(true, 'list'));
        $this->assertFalse(Validator::dataType(false, 'list'));

        $this->assertFalse(Validator::dataType(1, 'list'));
        $this->assertFalse(Validator::dataType(-1, 'list'));
        $this->assertFalse(Validator::dataType(1.48, 'list'));

        $this->assertFalse(Validator::dataType(new \stdClass(), 'list'));
    }

    /** @testdox Data Type (Boolean) */
    public function test_data_type_validation_matches_boolean() : void
    {
        $this->assertFalse(Validator::dataType('hello', 'boolean'));
        $this->assertFalse(Validator::dataType(' ', 'boolean'));
        $this->assertFalse(Validator::dataType('', 'boolean'));

        $this->assertFalse(Validator::dataType([], 'boolean'));
        $this->assertFalse(Validator::dataType(['hello'], 'boolean'));
        $this->assertFalse(Validator::dataType(['key' => 'value'], 'boolean'));

        $this->assertFalse(Validator::dataType(null, 'boolean'));
        $this->assertTrue(Validator::dataType(true, 'boolean'));
        $this->assertTrue(Validator::dataType(false, 'boolean'));
        $this->assertTrue(Validator::dataType('true', 'boolean'));
        $this->assertTrue(Validator::dataType('false', 'boolean'));

        $this->assertFalse(Validator::dataType(1, 'boolean'));
        $this->assertFalse(Validator::dataType(-1, 'boolean'));
        $this->assertFalse(Validator::dataType(1.48, 'boolean'));

        $this->assertFalse(Validator::dataType(new \stdClass(), 'boolean'));
    }
}