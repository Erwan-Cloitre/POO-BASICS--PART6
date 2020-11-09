<?php


class Speedometer
{
    const constantFormule = 1.609;

    public static function convertKmToMiles(float $speed) :float
    {
        return number_format($speed / self::constantFormule, $decimals = 3);
    }

    public static function convertMilesToKm(float $speed) :float
    {
        return number_format($speed * self::constantFormule, $decimals = 3);
    }
}