<?php

use SmartLink\SmartLink;
use PHPUnit\Framework\TestCase;

class SmartLinkTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        // Set the global package name and desktop URL for testing
        SmartLink::setPackageName('com.testcompany.testapp');
        SmartLink::setDesktopURL('https://testexample.com/desktop-landing-page');
    }

    public function testGenerateSmartLinkForMobile()
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Linux; Android 10; SM-G970F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.105 Mobile Safari/537.36';
        
        $payload = ['referral_code' => 'TEST123'];
        $expectedSmartLink = 'smartlink://open?package=com.testcompany.testapp&payload=%7B%22referral_code%22%3A%22TEST123%22%7D';
        $generatedSmartLink = SmartLink::generateSmartLink($payload);

        $this->assertEquals($expectedSmartLink, $generatedSmartLink);
    }

    public function testGenerateSmartLinkForDesktop()
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36';
        
        $payload = ['referral_code' => 'TEST123'];
        $expectedDesktopURL = 'https://testexample.com/desktop-landing-page';
        $generatedSmartLink = SmartLink::generateSmartLink($payload);

        $this->assertEquals($expectedDesktopURL, $generatedSmartLink);
    }
}
