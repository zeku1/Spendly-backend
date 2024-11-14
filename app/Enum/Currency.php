<?php

namespace App\Enum;

enum Currency: String
{
    const PHP = 'php';
    const USD = 'usd';
    const SGD = 'sgd';
    const YEN = 'yen';
    const EUR = 'eur';

    public static function getValues():array
    {
        return [
            self::PHP,
            self::USD,
            self::SGD,
            self::YEN,
            self::EUR,
        ];
    }
}
