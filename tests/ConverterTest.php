<?php

use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    public function test1yieldsI()
    {
        // arrange
        $model = new Converter();
        $expected = 'I';
        // act
        $actual = $model->arabicToRoman(1);
        // assert
        $this->assertEquals($expected, $actual);
    }
}
