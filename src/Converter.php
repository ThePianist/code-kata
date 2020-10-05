<?php

class Converter
{
    public function arabicToRoman(int $arabic): string
    {
        if ($arabic >= 500) {
            $roman = 'D';
        } elseif ($arabic >= 100) {
            $roman = 'C';
        } elseif ($arabic >= 50) {
            $roman = 'L';
        } elseif ($arabic >= 10) {
            $roman = 'X';
        } elseif ($arabic >= 5) {
            $roman = 'V';
        } else {
            $roman = 'I';
        }

        return $roman;
    }
}