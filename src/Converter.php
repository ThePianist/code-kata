<?php

class Converter
{
    public function arabicToRoman(int $number): string
    {
        $arabicToRoman = [
            'M' => 1000,
            'D' => 500,
            'C' => 100,
            'L' => 50,
            'X' => 10,
            'V' => 5,
            'I' => 1
        ];

        $result = '';

        foreach ($arabicToRoman as $roman => $arabic) {
            while ($number >= $arabic) {
                $result .= $roman;
                $number = $number - $arabic;
            }
        }

        return $result;
    }
}