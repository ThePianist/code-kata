<?php

use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{

    /**
     * @dataProvider providerArabicToProvider
     */
    public function testArabictoRoman(
        int $arabic,
        string $roman
    ) {
        // arrange
        $model = new Converter();
        $expected = $roman;
        // act
        $actual = $model->arabicToRoman($arabic);
        // assert
        $this->assertEquals($expected, $actual);
    }

    function providerArabicToProvider(): array
    {
        return [
            [
                'arabic' => 1,
                'roman' => 'I'
            ],
            [
                'arabic' => 5,
                'roman' => 'V'
            ]
        ];
    }
}
