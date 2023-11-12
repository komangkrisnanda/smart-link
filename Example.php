<?php

require 'vendor/autoload.php';

use SmartLink\SmartLink;

// Set the package name and desktop URL (optional if set globally)
SmartLink::setPackageName('com.yourcompany.yourapp');
SmartLink::setDesktopURL('https://example.com/desktop-landing-page');

// Generate a smart link for mobile or desktop
$payload = ['referral_code' => 'ABC123'];
$smartLink = SmartLink::generateSmartLink($payload);

// Use the generated smart link in your application
echo $smartLink . "\n";
