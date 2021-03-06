<?php
/**
 * The purpose of this file is to show the functionality
 * adjust the require path to match your autoloader.php.
 *
 * Can have unexpected behaviour if precision in your php.ini is not hight enough
 * ini_set('precision', 16);
 */
require __DIR__.'/../vendor/autoload.php';

use SdotB\Utils\Utils;

try {
    echo 'Timestamps generator:'.PHP_EOL;
    printf('millitime: %d'.PHP_EOL, Utils::mTs());
    printf('microtime: %d'.PHP_EOL, Utils::uTs());
    printf('nanotime: %d'.PHP_EOL, Utils::nTs());
    echo PHP_EOL.'Random string generator:'.PHP_EOL;
    printf('default (32 char [a-zA-Z0-9]): \'%s\''.PHP_EOL, Utils::randStr());
    printf('custom (12 char [a-zA-Z0-9]): \'%s\''.PHP_EOL, Utils::randStr(12));
    printf('custom (6 char [a-z]): \'%s\''.PHP_EOL, Utils::randStr(6, 'abcdefghijklmnopqrstuvwxyz'));
    printf('custom (8 char not confusing chars): \'%s\''.PHP_EOL, Utils::randStr(8, 'CDEFGHJKMNPRTUVWXY3679'));
    printf('custom (from a string: "my custom string!!"): \'%s\''.PHP_EOL, Utils::randStr(strlen('my custom string!!'), 'my custom string!!'));
    echo PHP_EOL.'Client IP address:'.PHP_EOL;
    printf('address: \'%s\''.PHP_EOL, Utils::clientIP());
} catch (\Exception $e) {
    echo $e->getMessage();
}
