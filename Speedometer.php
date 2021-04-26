<?php

class Speedometer 
{
    public const convertKmToMiles = 10;

    public static function retrieveKilometre(int $miles)
    {
        return $miles * self::convertKmToMiles;
    }
    public static function retrieveMiles(int $kilometres)
    {
        return $kilometres * self ::convertKmToMiles;
    }
}
echo Speedometer::convertKmToMiles;