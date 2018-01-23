<?php
declare(strict_types=1);

namespace Smichaelsen\ImageEffects\Utility;

class ImageMagickParameters
{

    const BRIGHTNESS = [
        'minus30' => '-gamma 0.7',
        'minus20' => '-gamma 0.8',
        'minus10' => '-gamma 0.9',
        'dont_change' => '',
        'plus10' => '-gamma 1.1',
        'plus20' => '-gamma 1.2',
        'plus30' => '-gamma 1.3',
    ];

    const FILTERS = [
        'nofilter' => '',
        '1977' => '-contrast -modulate 110,130',
        'aden' => '+contrast -modulate 120,85,89',
        'brannan' => '-contrast -contrast \( +clone -sepia-tone 50% \) -average',
        'brooklyn' => '+contrast -modulate 110,100',
        'clarendon' => '-contrast -modulate 100,135',
        'earlybird' => '+contrast \( +clone -sepia-tone 80% \) -average',
        'gingham' => '-modulate 105,100,94',
        'hudson' => '+contrast -modulate 120,110',
        'inkwell' => '\( +clone -sepia-tone 70% \) -average -contrast -modulate 130,100 -colorspace Gray',
    ];

    const SATURATION = [
        'minus90' => '-modulate 100,10',
        'minus80' => '-modulate 100,20',
        'minus70' => '-modulate 100,30',
        'minus60' => '-modulate 100,40',
        'minus50' => '-modulate 100,50',
        'minus40' => '-modulate 100,60',
        'minus30' => '-modulate 100,70',
        'minus20' => '-modulate 100,80',
        'minus10' => '-modulate 100,90',
        'dont_change' => '',
        'plus10' => '-modulate 100,110',
        'plus20' => '-modulate 100,120',
        'plus30' => '-modulate 100,130',
    ];

    public static function getBrightness(string $key): string
    {
        return self::BRIGHTNESS[$key];
    }

    public static function getFilter(string $key): string
    {
        return self::FILTERS[$key];
    }

    public static function getSaturation(string $key): string
    {
        return self::SATURATION[$key];
    }

}
