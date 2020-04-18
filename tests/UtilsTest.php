<?php

namespace AppTest;

use PHPUnit\Framework\TestCase;
use SdotB\Utils\Utils;

/**
 * @internal
 * @coversNothing
 */
class UtilsTest extends TestCase
{
    protected $utils;

    public function setUp(): void
    {
        $this->utils = new Utils();
    }

    public function testMTSIsValid()
    {
        $mTS = $this->utils->mTS();
        $this->assertIsInt($mTS);
        $this->assertEquals(13, strlen((string) $mTS));
        //$this->assertEquals(13, ceil(log($mTS+1, 10)));
    }

    public function testUTSIsValid()
    {
        $uTS = $this->utils->uTS();
        $this->assertIsInt($uTS);
        $this->assertEquals(16, strlen((string) $uTS));
        //$this->assertEquals(16, ceil(log($mTS+1, 10)));
    }

    public function testNTSIsValid()
    {
        $nTS = $this->utils->nTS();
        $this->assertIsInt($nTS);
        $this->assertEquals(19, strlen((string) $nTS));
        //$this->assertEquals(19, ceil(log($mTS+1, 10)));
    }

    public function testRandStrCustom()
    {
        $length = 8;
        $basestring = 'gsyueiwmha952';
        $result = $this->utils->randStr($length, $basestring);
        $this->assertEquals($length, strlen($result));
    }

    public function testRandStrDefault()
    {
        $result = $this->utils->randStr();
        $this->assertEquals(32, strlen($result));
    }

    public function testIPValid()
    {
        $ip = $this->utils->clientIP();
        $this->assertTrue(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) || ('' == $ip));
    }
}
