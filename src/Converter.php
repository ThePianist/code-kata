<?php

class Converter
{
    public function arabicToRoman(int $arabic): string
    {
        $roman = '';

        if ($arabic >= 1000) {
            $roman = 'M';
        } elseif ($arabic >= 500) {
            $roman = 'D';
        } elseif ($arabic >= 100) {
            $roman = 'C';
        } elseif ($arabic >= 50) {
            $roman = 'L';
        } elseif ($arabic >= 10) {
            $roman = 'X';
        } elseif ($arabic >= 5) {
            $roman = 'V';
        }

        if ($arabic < 5) {
            for ($i = 0; $i < $arabic; $i++) {
                $roman .= 'I';
            }
        }

        return $roman;
    }
}