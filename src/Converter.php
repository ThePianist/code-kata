<?php

class Converter
{
    public function arabicToRoman(int $arabic): string
    {
        $roman = '';

        if ($arabic > 999) {
            while ($arabic > 999) {
                $roman .= $roman . 'M';
                $arabic -= 1000;
            }
        }

        if ($arabic > 499) {
            while ($arabic > 499) {
                $roman .= $roman . 'D';
                $arabic -= 500;
            }
        }

        if ($arabic > 99) {
            while ($arabic > 99) {
                $roman .= $roman . 'C';
                $arabic -= 100;
            }
        }

        if ($arabic > 49) {
            while ($arabic > 49) {
                $roman .= $roman . 'L';
                $arabic -= 50;
            }
        }

        if ($arabic > 9) {
            while ($arabic > 9) {
                $roman .= $roman . 'X';
                $arabic -= 10;
            }
        }

        if ($arabic > 4) {
            while ($arabic > 4) {
                $roman .= $roman . 'V';
                $arabic -= 5;
            }
        }

        if ($arabic < 5) {
            for ($i = $arabic; $i > 0; $i--) {
                $roman = $roman . 'I';
            }
        }

        return $roman;
    }
}