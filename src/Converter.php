<?php

class Converter
{
    public function arabicToRoman(int $number): string
    {
        $arabicToRoman = [
            1000 => 'M',
            500 => 'D',
            100 => 'C',
            50 => 'L',
            10 => 'X',
            5 => 'V',
            1 => 'I'
        ];

        $result = '';

        foreach ($arabicToRoman as $arabic => $roman) {
            while ($number >= $arabic) {
                //var_dump(array_key_exists($number + 1, $arabicToRoman));
                if ($arabic === ($number + 1)) {
                    $result = $roman . $arabicToRoman[$number + 1];
                    //echo "arabic: " . $arabic . PHP_EOL;
                    $number = $number - $arabic;
                    //echo $number . PHP_EOL;
                    break;
                }

                $result .= $roman;
                $number = $number - $arabic;
            }
        }

        return $result;
    }
}