<?php
namespace Utils;

/**
 * Easy set of utility for projects
 * 
 * For timestamp methods check and set a proper precision value in your php.ini
 * ini_set('precision', 16);
 */
class Utils
{
    /**
     * Generate a timestamp expressed in milliseconds.
     *
     * @return int
     */
    public static function mTS(): int
    {
        return (int)(microtime(true)*1000);
    }

    /**
     * Generate a timestamp expressed in microseconds.
     *
     * @return int
     */
    public static function uTS(): int
    {
        return (int)(microtime(true)*1000000);
    }

    /**
     * Generate a timestamp expressed in nanoseconds.
     *
     * @return int
     */
    public static function nTS(): int
    {
        return (int)(microtime(true)*1000000000);
    }

    /**
     * Generate a randomized string.
     *
     * @param int $l Length of the result string
     * @param string $c List of chars used to compose the result
     * 
     * @return string
     */
    public static function randStr(int $l = 32, string $c = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'): string
    {
        for ($s = '', $cl = strlen($c)-1, $i = 0; $i < $l; $s .= $c[mt_rand(0, $cl)], ++$i);
        return (string)$s;
    }
}
