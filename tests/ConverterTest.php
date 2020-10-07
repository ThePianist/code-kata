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
/*            [
                'arabic' => 1,
                'roman' => 'I'
            ],
            [
                'arabic' => 5,
                'roman' => 'V'
            ],
            [
                'arabic' => 10,
                'roman' => 'X'
            ],
            [
                'arabic' => 50,
                'roman' => 'L'
            ],
            [
                'arabic' => 100,
                'roman' => 'C'
            ],
            [
                'arabic' => 500,
                'roman' => 'D'
            ],
            [
                'arabic' => 1000,
                'roman' => 'M'
            ],
            [
                'arabic' => 3,
                'roman' => 'III'
            ],
            [
                'arabic' => 4,
                'roman' => 'IV'
            ],*/
            [
                'arabic' => 9,
                'roman' => 'IX'
            ]
        ];
    }
}
