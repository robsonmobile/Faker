<?php

namespace Faker\Provider\bn_BD;

use Faker\Provider\bn_BD\Utils;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    public static function phoneNumber()
    {
        $number = "+880";
        foreach (range(0, 7) as $num) {
            $number .= static::randomDigit();
        }

        return Utils::getBanglaNumber($number);
    }

}
