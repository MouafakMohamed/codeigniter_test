<?php
/*
* @author Mohammad Ali Abassi <ali.abassi@outlook.com>
* @copyright 2016 Mohammad Ali Abassi
* @link https://github.com/mohammad-ali021/number-to-word
* @version 1.0.0
*/
if(! function_exists('convert_number_to_words'))
{

    function change_number_to_words($number,$lang='en') 
    {
       if($lang=='fr'){
            $hyphen      = ' ';
            $conjunction = ' ';
            $separator   = ' ';
            $negative    = 'moint ';
            $decimal     = ' virgule ';
            $dictionary  = array(
               /* 0                   => 'zéro',
                1                   => 'un',
                2                   => 'deux',
                3                   => 'trois',
                4                   => 'quatre',
                5                   => 'cinq',
                6                   => 'six',
                7                   => 'sept',
                8                   => 'huit',
                9                   => 'neuf',
                10                  => 'dix',
                11                  => 'onze',
                12                  => 'douze',
                13                  => 'treize',
                14                  => 'quatorze',
                15                  => 'quinze',
                16                  => 'seize',
                17                  => 'dix-sept',
                18                  => 'dix-huit',
                19                  => 'dix-neuf',
                20                  => 'vingt',
                30                  => 'trente',
                40                  => 'quarante',
                50                  => 'cinquante',
                60                  => 'soixante',
                70                  => 'soixante-dix',
                80                  => 'quatre-vingts',
                90                  => 'quatre-vingts-dix',
                100                 => 'cent',
                1000                => 'mille',*/
                0               => 'zéro',
                1               => 'un',
                2               => 'deux',
                3               => 'trois',
                4               => 'quatre',
                5               => 'cinq',
                6               => 'six',
                7               => 'sept',
                8               => 'huit',
                9               => 'neuf',
                10               => 'dix',
                11               => 'onze',
                12               => 'douze',
                13               => 'treize',
                14               => 'quatorze',
                15               => 'quinze',
                16               => 'seize',
                17               => 'dix-sept',
                18               => 'dix-huit',
                19               => 'dix-neuf',
                20               => 'vingt',
                21               => 'vingt et un',
                22               => 'vingt-deux',
                23               => 'vingt-trois',
                24               => 'vingt-quatre',
                25               => 'vingt-cinq',
                26               => 'vingt-six',
                27               => 'vingt-sept',
                28               => 'vingt-huit',
                29               => 'vingt-neuf',
                30               => 'trente',
                31               => 'trente et un',
                32               => 'trente-deux',
                33               => 'trente-trois',
                34               => 'trente-quatre',
                35               => 'trente-cinq',
                36               => 'trente-six',
                37               => 'trente-sept',
                38               => 'trente-huit',
                39               => 'trente-neuf',
                40               => 'quarante',
                41               => 'quarante et un',
                42               => 'quarante-deux',
                43               => 'quarante-trois',
                44               => 'quarante-quatre',
                45               => 'quarante-cinq',
                46               => 'quarante-six',
                47               => 'quarante-sept',
                48               => 'quarante-huit',
                49               => 'quarante-neuf',
                50               => 'cinquante',
                51               => 'cinquante et un',
                52               => 'cinquante-deux',
                53               => 'cinquante-trois',
                54               => 'cinquante-quatre',
                55               => 'cinquante-cinq',
                56               => 'cinquante-six',
                57               => 'cinquante-sept',
                58               => 'cinquante-huit',
                59               => 'cinquante-neuf',
                60               => 'soixante',
                61               => 'soixante et un',
                62               => 'soixante-deux',
                63               => 'soixante-trois',
                64               => 'soixante-quatre',
                65               => 'soixante-cinq',
                66               => 'soixante-six',
                67               => 'soixante-sept',
                68               => 'soixante-huit',
                69               => 'soixante-neuf',
                70               => 'soixante-dix',
                71               => 'soixante-onze',
                72               => 'soixante-douze',
                73               => 'soixante-treize',
                74               => 'soixante-quatorze',
                75               => 'soixante-quinze',
                76               => 'soixante-seize',
                77               => 'soixante-dix-sept',
                78               => 'soixante-dix-huit',
                79               => 'soixante-dix-neuf',
                80               => 'quatre-vingts',
                81               => 'quatre-vingt-un',
                90               => 'quatre-vingt-dix',
                91               => 'quatre-vingt-onze',
                92               => 'quatre-vingt-douze',
                93               => 'quatre-vingt-treize',
                94               => 'quatre-vingt-quatorze',
                95               => 'quatre-vingt-quinze',
                96               => 'quatre-vingt-seize',
                97               => 'quatre-vingt-dix-sept',
                98               => 'quatre-vingt-dix-huit',
                99               => 'quatre-vingt-dix-neuf',
                100               => 'cent',
                101               => 'cent-un',
                199               => 'cent-quatre-vingt-dix-neuf',
                203               => 'deux-cent-trois',
                287               => 'deux-cent-quatre-vingt-sept',
                300               => 'trois-cents',
                356               => 'trois-cent-cinquante-six',
                410               => 'quatre-cent-dix',
                434               => 'quatre-cent-trente-quatre',
                578               => 'cinq-cent-soixante-dix-huit',
                689               => 'six-cent-quatre-vingt-neuf',
                729               => 'sept-cent-vingt-neuf',
                894               => 'huit-cent-quatre-vingt-quatorze',
                999               => 'neuf-cent-quatre-vingt-dix-neuf',
                1000               => 'mille',
                1000000             => 'million',
                1000000000          => 'milliard',
                1000000000000       => 'billion',
                1000000000000000    => 'quadrillion',
                1000000000000000000 => 'quintillion'
            );
       }else if($lang=='en'){
            $hyphen      = '-';
            $conjunction = ' and ';
            $separator   = ', ';
            $negative    = 'negative ';
            $decimal     = ' point ';
            $dictionary  = array(
                0                   => 'zero',
                1                   => 'one',
                2                   => 'two',
                3                   => 'three',
                4                   => 'four',
                5                   => 'five',
                6                   => 'six',
                7                   => 'seven',
                8                   => 'eight',
                9                   => 'nine',
                10                  => 'ten',
                11                  => 'eleven',
                12                  => 'twelve',
                13                  => 'thirteen',
                14                  => 'fourteen',
                15                  => 'fifteen',
                16                  => 'sixteen',
                17                  => 'seventeen',
                18                  => 'eighteen',
                19                  => 'nineteen',
                20                  => 'twenty',
                30                  => 'thirty',
                40                  => 'fourty',
                50                  => 'fifty',
                60                  => 'sixty',
                70                  => 'seventy',
                80                  => 'eighty',
                90                  => 'ninety',
                100                 => 'hundred',
                1000                => 'thousand',
                1000000             => 'million',
                1000000000          => 'billion',
                1000000000000       => 'trillion',
                1000000000000000    => 'quadrillion',
                1000000000000000000 => 'quintillion'
                );
       }else if($lang=='pa'){
            $hyphen      = ' ';
            $conjunction = ' ';
            $separator   = 'او  ';
            $negative    = 'منفی ';
            $decimal     = ' اعشاریه ';
            $dictionary  = array(
                0                   => 'صفر',
                1                   => 'یو',
                2                   => 'دوه',
                3                   => 'درې',
                4                   => 'څلور',
                5                   => 'پنځه',
                6                   => 'شپږ',
                7                   => 'اووه',
                8                   => 'اته',
                9                   => 'نه',
                10                  => 'لس',
                11                  => 'یولس',
                12                  => 'دوولس',
                13                  => 'دیارلس',
                14                  => 'څوارلس',
                15                  => 'پنځلس',
                16                  => 'شپاړلس',
                17                  => 'اوولس',
                18                  => 'اتلس',
                19                  => 'نولس',
                20                  => 'شل',
                30                  => 'دیرش',
                40                  => 'څلویښت',
                50                  => 'پنځوس',
                60                  => 'شپیته',
                70                  => 'اویا',
                80                  => 'اتیا',
                90                  => 'نوي',
                100                 => 'سوه',
                1000                => 'زره',
                1000000             => 'میلیونه',
                1000000000          => 'ملیارده',
                1000000000000       => 'تریلیونه',
                1000000000000000    => 'کادریلیونه',
                1000000000000000000 => 'کوینتیلیونه'
            );

       }
       
        if (!is_numeric($number)) {
            return false;
        }
       
        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error(
                'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
                E_USER_WARNING
            );
            return false;
        }

        if ($number < 0) {
            return $negative . change_number_to_words(abs($number),$lang);
        }
       
        $string = $fraction = null;
       
        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }
       
        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = ((int) ($number / 10)) * 10;
                $units  = $number % 10;
                if($lang=='pa'){
                    if ($units) {
                        $string=$dictionary[$units];
                        $string .= $hyphen . $dictionary[$tens];
                    }else{
                        $string=$dictionary[$tens];
                    }
                }else{
                $string=$dictionary[$tens];
                    if ($units) {
                        $string .= $hyphen . $dictionary[$units];
                    }   
                }
                break;
            case $number < 1000:
                $hundreds  = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . change_number_to_words($remainder,$lang);
                }
                break;
            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = change_number_to_words($numBaseUnits,$lang) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? " ".$conjunction : " ".$separator;
                    $string .= change_number_to_words($remainder,$lang);
                }
                break;
        }
       
        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }
       
        return $string;
    }
}

?>
