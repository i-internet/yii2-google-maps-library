<?php
/**
 * @copyright Copyright (c) 2014 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\google\maps\overlays;


class StrokePosition
{
    const CENTER = 'google.maps.StrokePosition.CENTER';
    const INSIDE = 'google.maps.StrokePosition.INSIDE';
    const OUTSIDE = 'google.maps.StrokePosition.OUTSIDE';

    public static function getIsValid($value){
        return in_array(
            $value,
            [
                static::CENTER,
                static::INSIDE,
                static::OUTSIDE,
            ]
        );
    }
} 