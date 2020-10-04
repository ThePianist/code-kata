<?php

class Converter
{
    public function arabicToRoman(int $arabic): string
    {
        if ($arabic >= 5) {
            $roman = 'V';
        } else {
            $roman = 'I';
        }

        return $roman;
    }
}